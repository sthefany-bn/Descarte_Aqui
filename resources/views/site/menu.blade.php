<header>
    <a href="#" class="abrir" onclick="abrirMenu()">&#9776</a>
</header>
<nav id="menu">
    <section>
        <a href="#" class="x" onclick="fecharMenu()">&times</a>
    </section>
    <h1>MENU</h1>
    <a href="">
        <section>
            <h3>Perfil</h3>
        </section>
    </a>
    <a href="">
        <section>
            <h3>Catadores</h3>
        </section>
    </a>
    <a href="">
        <section>
            <h3>Descartados</h3>
        </section>
    </a>
    <a href="">
        <section>
            <h3>Disponibilidade semanal</h3>
        </section>
    </a>
    <a href="">
        <section>
            <h3>Configurações</h3>
        </section>
    </a>
</nav>
<script>
    function abrirMenu() {
        document.getElementById('menu').style.width = '250px';
    }
    function fecharMenu() {
        document.getElementById('menu').style.width = '0px';
    }
</script>
