<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;800&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kairós - Vagas de Emprego</title>
    <body>
    <form action="salvar_vaga.php" method="POST">
        <h1>Anunciar Nova Vaga</h1>
        </form>

    <div class="card">
        <h1>Kairós</h1>
        <p>Sua oportunidade de crescer</p>
        </div>
</body>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;800&display=swap');

    /* 1. CONFIGURAÇÃO DA TELA (Onde os balões ficam) */
    body {
        margin: 0;
        padding: 40px;
        background-color: #f3f4f6; /* Fundo cinza suave */
        font-family: 'Plus Jakarta Sans', sans-serif;
        display: flex;
        justify-content: center; /* Centraliza horizontalmente */
        align-items: flex-start; /* Alinha pelo topo */
        gap: 30px;               /* Espaço entre os balões */
        flex-wrap: wrap;         /* Ajusta para telas menores */
        min-height: 100vh;
    }

    /* 2. ESTILO DOS BALÕES (Cards) */
    form, .card {
        background: #ffffff;
        padding: 32px;
        border-radius: 24px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.04);
        border: 1px solid #e5e7eb;
        width: 100%;
        max-width: 400px;
        box-sizing: border-box;
        transition: transform 0.3s ease;
    }

    form:hover, .card:hover {
        transform: translateY(-5px); /* Efeito de flutuar ao passar o mouse */
    }

    /* 3. TÍTULOS E TEXTOS */
    h1 {
        font-size: 24px;
        font-weight: 800;
        color: #7c3aed; /* Roxo do seu print */
        margin-bottom: 24px;
        text-align: center;
    }

    label {
        display: block;
        font-size: 11px;
        font-weight: 700;
        color: #4b5563;
        text-transform: uppercase;
        margin-bottom: 6px;
        letter-spacing: 0.5px;
    }

    /* 4. CAMPOS DE ENTRADA (Inputs e Textarea) */
    input, textarea {
        width: 100%;
        background: #f9fafb;
        border: 1.5px solid #e5e7eb;
        padding: 12px 16px;
        border-radius: 12px;
        margin-bottom: 16px;
        font-family: inherit;
        font-size: 14px;
        color: #1f2937;
        box-sizing: border-box;
        transition: all 0.2s ease;
    }

    input:focus, textarea:focus {
        outline: none;
        border-color: #2563eb;
        background: #fff;
        box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.1);
    }

    textarea {
        height: 100px;
        resize: none; /* Impede o usuário de bagunçar o tamanho */
    }

    /* 5. BOTÃO */
    button {
        width: 100%;
        background: #2563eb; /* Azul padrão */
        color: white;
        padding: 16px;
        border: none;
        border-radius: 14px;
        font-weight: 700;
        font-size: 16px;
        cursor: pointer;
        transition: all 0.3s ease;
        margin-top: 8px;
    }

    button:hover {
        background: #1d4ed8;
        box-shadow: 0 8px 20px rgba(37, 99, 235, 0.25);
    }

    button:active {
        transform: scale(0.98);
    }
</style>
</head>

<body>
  <body>
    <form action="salvar_vaga.php" method="POST">
        <h1>Anunciar Nova Vaga</h1>
        
        <label>Título da Oportunidade</label>
        <input type="text" name="titulo" placeholder="Ex: Desenvolvedor Front-end" required>
        
        <label>Nome da Empresa</label>
        <input type="text" name="empresa" placeholder="Ex: Kairós Tech" required>
        
        <label>Cidade / Home Office</label>
        <input type="text" name="localizacao" placeholder="Ex: São Paulo, SP ou Remoto" required>
        
        <label>O que o candidato fará?</label>
        <textarea name="descricao" placeholder="Descreva os requisitos e benefícios..."></textarea>
        
        <button type="submit">Publicar Vaga</button>
    </form>
</body>
  <form action="salvar_vaga.php" method="POST">
    <input type="text" name="titulo" placeholder="Título" required>
    <input type="text" name="empresa" placeholder="Empresa" required>
    <input type="text" name="localizacao" placeholder="Local" required>
    <textarea name="descricao" placeholder="Descrição"></textarea>
    <button type="submit">Postar Vaga</button>
</form>
     <script>
     let vagas = JSON.parse(localStorage.getItem('vagas')) || [
      { id: 1, titulo: 'Desenvolvedor Frontend', empresa: 'TechBR', local: 'Remoto', tipo: 'CLT', desc: 'React, TypeScript, 3+ anos exp.' },
      { id: 2, titulo: 'Designer UI/UX', empresa: 'Criativa Co', local: 'São Paulo - SP', tipo: 'PJ', desc: 'Figma, Design System, portfólio obrigatório.' }
    ];
    let usuarioLogado = JSON.parse(localStorage.getItem('usuarioLogado')) || null;
    let perfis = JSON.parse(localStorage.getItem('perfis')) || {};

    // Dados fake pra Conversas e Notificações
    let conversas = [
      { id: 1, com: 'TechBR', msg: 'Olá! Vimos seu perfil e gostaríamos de marcar uma entrevista.', tempo: '2h atrás', lida: false },
      { id: 2, com: 'Criativa Co', msg: 'Você foi aprovado para próxima fase!', tempo: '1 dia atrás', lida: false },
      { id: 3, com: 'João Silva', msg: 'Temos interesse no seu perfil para Dev Backend', tempo: '3 dias atrás', lida: true }
    ];
    let notificacoes = [
      { id: 1, titulo: 'Nova vaga compatível', texto: 'Vaga de Desenvolvedor React combina com seu perfil', tempo: '30min atrás', lida: false },
      { id: 2, titulo: 'Candidatura visualizada', texto: 'TechBR visualizou sua candidatura', tempo: '2h atrás', lida: false },
      { id: 3, titulo: 'Perfil incompleto', texto: 'Complete seu perfil para aumentar suas chances', tempo: '1 dia atrás', lida: false },
      { id: 4, titulo: 'Bem-vindo ao JobMatch', texto: 'Comece buscando vagas agora mesmo', tempo: '5 dias atrás', lida: true }
    ];

    window.onload = () => {
      if (usuarioLogado) mostrarDashboard();
      renderizarVagas();
    };

    function trocarAba(tipo) {
      document.querySelectorAll('.tab').forEach(tab => tab.classList.remove('active'));
      document.querySelectorAll('.form').forEach(form => form.classList.remove('active'));
      if (tipo === 'candidato') {
        document.querySelectorAll('.tab')[0].classList.add('active');
        document.getElementById('form-candidato').classList.add('active');
      } else {
        document.querySelectorAll('.tab')[1].classList.add('active');
        document.getElementById('form-empresa').classList.add('active');
      }
    }

    function trocarConteudoDash(secao) {
      document.querySelectorAll('.conteudo-dash').forEach(c => c.classList.remove('active'));
      document.querySelectorAll('.menu-dash button').forEach(b => b.classList.remove('btn-secondary'));

      document.getElementById(secao).classList.add('active');

      // Ativa o botão correto
      const btnId = 'btn-' + secao;
      if (document.getElementById(btnId)) {
        document.getElementById(btnId).classList.add('btn-secondary');
      }

      // Renderiza conteúdo dinâmico se necessário
      if (secao.includes('conversas')) renderizarConversas();
      if (secao.includes('notificacoes')) renderizarNotificacoes();
    }

    function validarEmail(email) {
      return /\S+@\S+\.\S+/.test(email);
    }

    function login(tipo) {
      const email = document.getElementById(`email-${tipo}`).value.trim();
      const senha = document.getElementById(`senha-${tipo}`).value;
      let valido = true;

      document.getElementById(`erro-email-${tipo}`).style.display =!validarEmail(email)? 'block' : 'none';
      document.getElementById(`erro-senha-${tipo}`).style.display = senha.length < 6? 'block' : 'none';
      if (!validarEmail(email) || senha.length < 6) valido = false;

      if (!valido) return;

      usuarioLogado = { email, tipo };
      localStorage.setItem('usuarioLogado', JSON.stringify(usuarioLogado));
      mostrarDashboard();
      carregarPerfil();
    }

    function mostrarDashboard() {
      document.getElementById('login-area').classList.add('hidden');
      if (usuarioLogado.tipo === 'candidato') {
        document.getElementById('dash-candidato').classList.remove('hidden');
        document.getElementById('user-candidato').innerText = `Logado como: ${usuarioLogado.email}`;
        trocarConteudoDash('vagas-candidato');
      } else {
        document.getElementById('dash-empresa').classList.remove('hidden');
        document.getElementById('user-empresa').innerText = `Logado como: ${usuarioLogado.email}`;
        trocarConteudoDash('vagas-empresa');
      }
      renderizarVagas();
      atualizarBadges();
    }

    function logout() {
      localStorage.removeItem('usuarioLogado');
      usuarioLogado = null;
      document.getElementById('login-area').classList.remove('hidden');
      document.getElementById('dash-candidato').classList.add('hidden');
      document.getElementById('dash-empresa').classList.add('hidden');
      document.querySelectorAll('input').forEach(i => i.value = '');
    }

    function publicarVaga() {
      const titulo = document.getElementById('vaga-titulo').value.trim();
      const local = document.getElementById('vaga-local').value.trim();
      const desc = document.getElementById('vaga-desc').value.trim();
      const tipo = document.getElementById('vaga-tipo').value;

      if (!titulo ||!local ||!desc) {
        alert('Preenche todos os campos da vaga');
        return;
      }

      const novaVaga = {
        id: Date.now(),
        titulo, local, desc, tipo,
        empresa: usuarioLogado.email.split('@')[0]
      };
      vagas.unshift(novaVaga);
      localStorage.setItem('vagas', JSON.stringify(vagas));

      document.getElementById('vaga-titulo').value = '';
      document.getElementById('vaga-local').value = '';
      document.getElementById('vaga-desc').value = '';
      renderizarVagas();
    }

    function salvarPerfil(tipo) {
      if (!perfis[usuarioLogado.email]) perfis[usuarioLogado.email] = {};

      if (tipo === 'candidato') {
        perfis[usuarioLogado.email] = {
          nome: document.getElementById('perfil-nome-candidato').value,
          telefone: document.getElementById('perfil-tel-candidato').value,
          resumo: document.getElementById('perfil-resumo-candidato').value
        };
      } else {
        perfis[usuarioLogado.email] = {
          nome: document.getElementById('perfil-nome-empresa').value,
          cnpj: document.getElementById('perfil-cnpj-empresa').value,
          sobre: document.getElementById('perfil-sobre-empresa').value
        };
      }

      localStorage.setItem('perfis', JSON.stringify(perfis));
      alert('Perfil salvo com sucesso!');
    }

    function carregarPerfil() {
      const perfilSalvo = perfis[usuarioLogado.email];
      if (!perfilSalvo) return;

      if (usuarioLogado.tipo === 'candidato') {
        document.getElementById('perfil-nome-candidato').value = perfilSalvo.nome || '';
        document.getElementById('perfil-tel-candidato').value = perfilSalvo.telefone || '';
        document.getElementById('perfil-resumo-candidato').value = perfilSalvo.resumo || '';
      } else {
        document.getElementById('perfil-nome-empresa').value = perfilSalvo.nome || '';
        document.getElementById('perfil-cnpj-empresa').value = perfilSalvo.cnpj || '';
        document.getElementById('perfil-sobre-empresa').value = perfilSalvo.sobre || '';
      }
    }

    function renderizarVagas() {
      const listaCandidato = document.getElementById('lista-vagas-candidato');
      const listaEmpresa = document.getElementById('lista-vagas-empresa');

      if (listaCandidato) {
        listaCandidato.innerHTML = vagas.map(v => `
          <div class="vaga">
            <h3>${v.titulo}</h3>
            <p style="color: var(--gray-600); margin-bottom: 8px;">${v.empresa} - ${v.local}</p>
            <span class="vaga-tag">${v.tipo}</span>
            <p style="margin-top: 8px; font-size: 14px;">${v.desc}</p>
            <button style="margin-top: 12px;" onclick="alert('Candidatura enviada! Em um app real isso iria pro backend.')">Candidatar-se</button>
          </div>
        `).join('') || '<p>Nenhuma vaga disponível ainda.</p>';
      }

      if (listaEmpresa && usuarioLogado?.tipo === 'empresa') {
        const minhasVagas = vagas.filter(v => v.empresa === usuarioLogado.email.split('@')[0]);
        listaEmpresa.innerHTML = minhasVagas.map(v => `
          <div class="vaga">
            <h3>${v.titulo}</h3>
            <p style="color: var(--gray-600); margin-bottom: 8px;">${v.local}</p>
            <span class="vaga-tag">${v.tipo}</span>
            <p style="margin-top: 8px; font-size: 14px;">${v.desc}</p>
          </div>
        `).join('') || '<p>Você ainda não publicou vagas.</p>';
      }
    }

    function renderizarConversas() {
      const tipo = usuarioLogado.tipo;
      const lista = document.getElementById(`lista-conversas-${tipo}`);
      if (!lista) return;

      const conversasFiltradas = tipo === 'candidato'? conversas : conversas.filter(c => c.com!== 'TechBR'); // exemplo

      lista.innerHTML = conversasFiltradas.map(c => `
        <div class="item-lista ${!c.lida? 'nao-lida' : ''}" onclick="marcarConversaLida(${c.id})">
          <div class="item-conteudo">
            <div class="item-titulo">${c.com}</div>
            <div class="item-texto">${c.msg}</div>
          </div>
          <div class="item-tempo">${c.tempo}</div>
        </div>
      `).join('') || '<p>Nenhuma conversa ainda.</p>';
    }

    function renderizarNotificacoes() {
      const tipo = usuarioLogado.tipo;
      const lista = document.getElementById(`lista-notificacoes-${tipo}`);
      if (!lista) return;

      lista.innerHTML = notificacoes.map(n => `
        <div class="item-lista ${!n.lida? 'nao-lida' : ''}" onclick="marcarNotificacaoLida(${n.id})">
          <div class="item-conteudo">
            <div class="item-titulo">${n.titulo}</div>
            <div class="item-texto">${n.texto}</div>
          </div>
          <div class="item-tempo">${n.tempo}</div>
        </div>
      `).join('') || '<p>Nenhuma notificação.</p>';
    }

    function marcarConversaLida(id) {
      const conv = conversas.find(c => c.id === id);
      if (conv) conv.lida = true;
      renderizarConversas();
      atualizarBadges();
      alert('Abrindo chat com ' + conv.com + ' - aqui você integraria com o chat real');
    }

    function marcarNotificacaoLida(id) {
      const notif = notificacoes.find(n => n.id === id);
      if (notif) notif.lida = true;
      renderizarNotificacoes();
      atualizarBadges();
    }

    function atualizarBadges() {
      const naoLidasConv = conversas.filter(c =>!c.lida).length;
      const naoLidasNotif = notificacoes.filter(n =>!n.lida).length;

      const badgeConvCand = document.getElementById('badge-conversas-candidato');
      const badgeNotifCand = document.getElementById('badge-notificacoes-candidato');
      const badgeConvEmp = document.getElementById('badge-conversas-empresa');
      const badgeNotifEmp = document.getElementById('badge-notificacoes-empresa');

      if (badgeConvCand) badgeConvCand.style.display = naoLidasConv > 0? 'inline-block' : 'none';
      if (badgeNotifCand) badgeNotifCand.style.display = naoLidasNotif > 0? 'inline-block' : 'none';
      if (badgeConvEmp) badgeConvEmp.style.display = naoLidasConv > 0? 'inline-block' : 'none';
      if (badgeNotifEmp) badgeNotifEmp.style.display = naoLidasNotif > 0? 'inline-block' : 'none';

      if (badgeConvCand) badgeConvCand.innerText = naoLidasConv;
      if (badgeNotifCand) badgeNotifCand.innerText = naoLidasNotif;
      if (badgeConvEmp) badgeConvEmp.innerText = naoLidasConv > 1? 1 : naoLidasConv;
      if (badgeNotifEmp) badgeNotifEmp.innerText = naoLidasNotif > 2? 2 : naoLidasNotif;
    }
    </script>  
          <style>
            :root {
      --primary: #2563eb;
      --primary-dark: #1d4ed8;
      --gray-100: #f5f7fa;
      --gray-300: #d1d5db;
      --gray-600: #4b5563;
      --gray-900: #111827;
      --success: #10b981;
      --danger: #ef4444;
    }
    * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', sans-serif; }
    body { background: var(--gray-100); min-height: 100vh; }
   .container { max-width: 900px; margin: 0 auto; padding: 20px; }
   .card {
      background: white;
      border-radius: 12px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.06);
      padding: 32px;
      margin-bottom: 24px;
    }
    h1 { color: var(--gray-900); margin-bottom: 8px; }
    h2 { color: var(--gray-900); margin-bottom: 16px; font-size: 20px; }
   .subtitle { color: var(--gray-600); margin-bottom: 24px; font-size: 15px; }
   .tabs { display: flex; margin-bottom: 24px; border-bottom: 2px solid #eee; }
   .tab {
      flex: 1; padding: 12px; text-align: center; cursor: pointer;
      font-weight: 600; color: var(--gray-600);
      border-bottom: 2px solid transparent; margin-bottom: -2px;
    }
   .tab.active { color: var(--primary); border-bottom: 2px solid var(--primary); }
   .form { display: none; }
   .form.active { display: block; }
   .input-group { margin-bottom: 16px; }
    label { display: block; margin-bottom: 6px; font-size: 14px; color: var(--gray-900); font-weight: 500; }
    input, textarea, select {
      width: 100%; padding: 12px; border: 1px solid var(--gray-300);
      border-radius: 8px; font-size: 15px;
    }
    input:focus, textarea:focus { outline: none; border-color: var(--primary); }
   .error { color: var(--danger); font-size: 13px; margin-top: 4px; display: none; }
    button {
      padding: 12px 20px; background: var(--primary); color: white; border: none;
      border-radius: 8px; font-size: 15px; font-weight: 600; cursor: pointer;
    }
    button:hover { background: var(--primary-dark); }
   .btn-full { width: 100%; }
   .btn-secondary { background: var(--gray-600); }
   .btn-danger { background: var(--danger); }
   .btn-success { background: var(--success); }
   .header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px; }
   .header-actions { display: flex; gap: 12px; }
   .vaga {
      border: 1px solid var(--gray-300); border-radius: 8px; padding: 16px; margin-bottom: 12px;
    }
   .vaga h3 { margin-bottom: 4px; color: var(--gray-900); }
   .vaga-tag {
      display: inline-block; background: #dbeafe; color: #1e40af;
      padding: 2px 8px; border-radius: 12px; font-size: 12px; margin-right: 6px;
    }
   .hidden { display: none; }
   .grid { display: grid; gap: 16px; grid-template-columns: 1fr 1fr; }
   .menu-dash { display: flex; gap: 12px; margin-bottom: 24px; flex-wrap: wrap; }
   .menu-dash button { flex: 1; min-width: 120px; }
   .conteudo-dash { display: none; }
   .conteudo-dash.active { display: block; }
   .item-lista {
      border: 1px solid var(--gray-300); border-radius: 8px; padding: 16px; margin-bottom: 12px;
      display: flex; justify-content: space-between; align-items: flex-start; gap: 12px;
    }
   .item-lista.nao-lida { background: #eff6ff; border-color: var(--primary); }
   .item-conteudo { flex: 1; }
   .item-titulo { font-weight: 600; color: var(--gray-900); margin-bottom: 4px; }
   .item-texto { font-size: 14px; color: var(--gray-600); }
   .item-tempo { font-size: 12px; color: var(--gray-600); white-space: nowrap; }
   .badge {
      background: var(--danger); color: white; font-size: 11px;
      padding: 2px 6px; border-radius: 10px; margin-left: 6px;
    }
    @media (max-width: 640px) {.grid { grid-template-columns: 1fr; }.header-actions { flex-direction: column; }.menu-dash button { min-width: 45%; } }

      </style>
<div class="container">
    <div id="login-area" class="card" style="max-width: 450px; margin: 60px auto;">
      <h1>Kairós</h1>
      <p class="subtitle">Sua oportunidade de crescer</p>
      <div class="tabs">
        <div class="tab active" onclick="trocarAba('candidato')">Sou Candidato</div>
        <div class="tab" onclick="trocarAba('empresa')">Sou Empresa</div>
      </div>

      <div id="form-candidato" class="form active">
        <div class="input-group">
          <label>Email</label>
          <input type="email" id="email-candidato" placeholder="seu@email.com">
          <div class="error" id="erro-email-candidato">Email inválido</div>
        </div>
        <div class="input-group">
          <label>Senha</label>
          <input type="password" id="senha-candidato" placeholder="Mínimo 6 caracteres">
          <div class="error" id="erro-senha-candidato">Senha muito curta</div>
        </div>
        <button class="btn-full" onclick="login('candidato')">Entrar como Candidato</button>
      </div>

      <div id="form-empresa" class="form">
        <div class="input-group">
          <label>Email corporativo</label>
          <input type="email" id="email-empresa" placeholder="rh@suaempresa.com">
          <div class="error" id="erro-email-empresa">Email inválido</div>
        </div>
        <div class="input-group">
          <label>Senha</label>
          <input type="password" id="senha-empresa" placeholder="Mínimo 6 caracteres">
          <div class="error" id="erro-senha-empresa">Senha muito curta</div>
        </div>
        <button class="btn-full" onclick="login('empresa')">Entrar como Empresa</button>
      </div>
    </div>

    <div id="dash-candidato" class="hidden">
      <div class="header">
        <div>
          <h1>Painel do Candidato</h1>
          <p class="subtitle" id="user-candidato"></p>
        </div>
        <div class="header-actions">
          <button class="btn-danger" onclick="logout()">Sair</button>
        </div>
      </div>

      <div class="menu-dash">
        <button onclick="trocarConteudoDash('vagas-candidato')" id="btn-vagas-candidato" class="btn-secondary">Vagas</button>
        <button onclick="trocarConteudoDash('conversas-candidato')" id="btn-conversas-candidato">Conversas <span class="badge" id="badge-conversas-candidato">2</span></button>
        <button onclick="trocarConteudoDash('notificacoes-candidato')" id="btn-notificacoes-candidato">Notificações <span class="badge" id="badge-notificacoes-candidato">3</span></button>
        <button onclick="trocarConteudoDash('perfil-candidato')" id="btn-perfil-candidato">Meu Perfil</button>
      </div>

      <div id="vagas-candidato" class="conteudo-dash active">
        <div class="card">
          <h2>Vagas disponíveis</h2>
          <div id="lista-vagas-candidato"></div>
        </div>
      </div>

      <div id="conversas-candidato" class="conteudo-dash">
        <div class="card">
          <h2>Conversas</h2>
          <div id="lista-conversas-candidato"></div>
        </div>
      </div>

      <div id="notificacoes-candidato" class="conteudo-dash">
        <div class="card">
          <h2>Notificações</h2>
          <div id="lista-notificacoes-candidato"></div>
        </div>
      </div>

      <div id="perfil-candidato" class="conteudo-dash">
        <div class="card">
          <h2>Meu Perfil</h2>
          <div class="input-group">
            <label>Nome completo</label>
            <input type="text" id="perfil-nome-candidato" placeholder="Seu nome">
          </div>
          <div class="input-group">
            <label>Telefone</label>
            <input type="text" id="perfil-tel-candidato" placeholder="(11) 99999-9999">
          </div>
          <div class="input-group">
            <label>Resumo profissional</label>
            <textarea id="perfil-resumo-candidato" rows="4" placeholder="Fale sobre sua experiência"></textarea>
          </div>
          <button class="btn-success" onclick="salvarPerfil('candidato')">Salvar Perfil</button>
        </div>
      </div>
    </div>

    <div id="dash-empresa" class="hidden">
      <div class="header">
        <div>
          <h1>Painel da Empresa</h1>
          <p class="subtitle" id="user-empresa"></p>
        </div>
        <div class="header-actions">
          <button class="btn-danger" onclick="logout()">Sair</button>
        </div>
      </div>

      <div class="menu-dash">
        <button onclick="trocarConteudoDash('vagas-empresa')" id="btn-vagas-empresa" class="btn-secondary">Vagas</button>
        <button onclick="trocarConteudoDash('conversas-empresa')" id="btn-conversas-empresa">Conversas <span class="badge" id="badge-conversas-empresa">1</span></button>
        <button onclick="trocarConteudoDash('notificacoes-empresa')" id="btn-notificacoes-empresa">Notificações <span class="badge" id="badge-notificacoes-empresa">2</span></button>
        <button onclick="trocarConteudoDash('perfil-empresa')" id="btn-perfil-empresa">Meu Perfil</button>
      </div>

      <div id="vagas-empresa" class="conteudo-dash active">
        <div class="card">
          <h2>Publicar nova vaga</h2>
          <div class="grid">
            <div class="input-group">
              <label>Título da vaga</label>
              <input type="text" id="vaga-titulo" placeholder="Ex: Dev Frontend React">
            </div>
            <div class="input-group">
              <label>Local</label>
              <input type="text" id="vaga-local" placeholder="Ex: São Paulo - SP">
            </div>
          </div>
          <div class="input-group">
            <label>Descrição</label>
            <textarea id="vaga-desc" rows="3" placeholder="Descreva a vaga"></textarea>
          </div>
          <div class="input-group">
            <label>Tipo</label>
            <select id="vaga-tipo">
              <option value="CLT">CLT</option>
              <option value="PJ">PJ</option>
              <option value="Estágio">Estágio</option>
            </select>
          </div>
          <button onclick="publicarVaga()">Publicar vaga</button>
        </div>

        <div class="card">
          <h2>Minhas vagas publicadas</h2>
          <div id="lista-vagas-empresa"></div>
        </div>
      </div>

      <div id="conversas-empresa" class="conteudo-dash">
        <div class="card">
          <h2>Conversas com Candidatos</h2>
          <div id="lista-conversas-empresa"></div>
        </div>
      </div>

      <div id="notificacoes-empresa" class="conteudo-dash">
        <div class="card">
          <h2>Notificações</h2>
          <div id="lista-notificacoes-empresa"></div>
        </div>
      </div>

      <div id="perfil-empresa" class="conteudo-dash">
        <div class="card">
          <h2>Meu Perfil</h2>
          <div class="input-group">
            <label>Nome da empresa</label>
            <input type="text" id="perfil-nome-empresa" placeholder="Nome da sua empresa">
          </div>
          <div class="input-group">
            <label>CNPJ</label>
            <input type="text" id="perfil-cnpj-empresa" placeholder="00.000.000/0001-00">
          </div>
          <div class="input-group">
            <label>Sobre a empresa</label>
            <textarea id="perfil-sobre-empresa" rows="4" placeholder="Descreva a empresa"></textarea>
          </div>
          <button class="btn-success" onclick="salvarPerfil('empresa')">Salvar Perfil</button>
        </div>
      </div>
    </div>
  </div>
</body>
</html>