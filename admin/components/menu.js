class Menu extends HTMLElement {
    constructor() {
        super();
    }
    connectedCallback() {
        this.innerHTML =`
            <header class="close header" id="menu">
                <div class="click_menu" id="click_menu">
                    <img src="../assents/sgva/menu.svg" alt="Menu" class="logo_menu">
                </div>
                <nav>
                    <a href="/admin/pages/inicio.php"><img src="../assents/sgva/home.svg" alt="Inicio">
                        <section class="menu_items" id="menu_items">Inicio</section>
                    </a>
                    <a href="/admin/pages/productos.php"><img src="../assents/sgva/home.svg" alt="Productos">
                        <section class="menu_items" id="menu_items">Productos</section>
                    </a>
                    <a href="/admin/pages/"><img src="../assents/sgva/home.svg" alt="Caja">
                        <section class="menu_items" id="menu_items">Caja</section>
                    </a>
                    <a href="/admin/pages/"><img src="../assents/sgva/home.svg" alt="Informes">
                        <section class="menu_items" id="menu_items">Informes</section>
                    </a>
                </nav>
            </header>
            `;
    }
}
window.customElements.define("comp-menu", Menu);
