const headerTemplate = document.createElement("template");

headerTemplate.innerHTML = `

        <style>
        /* ESTO ES EL HEADER */
        header {
            height: 5rem;
            background-color: rgba(255, 255, 255, 0.657);
            border: solid rgba(255, 255, 255, 0.781);
            border-width: 3px 0;
            display:inline-block;
        }
        .nav-item {
            background-color: rgba(255, 255, 255, 0.733);
            border-color: #fff;
            box-shadow: 0 0 0 .25rem rgba(255, 255, 255, .25);
            
        }
        </style>
        
        <header >
      <ul class="d-flex justify-content-center py-3">
      Usuario: <?php echo $_SESSION['usuario']['correo']?>
        <li class="nav-item"><a href="../categorias.php" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="../carrito.php" class="nav-link">Features</a></li>
        <li class="nav-item"><a href="../login.php" class="nav-link">Pricing</a></li>
        
      </ul>
    </header>
    
   

<hr>
      `;
class Header extends HTMLElement {
  constructor() {
    super();
  }

  connectedCallback() {
    const shadowRoot = this.attachShadow({ mode: "closed" });

    shadowRoot.appendChild(headerTemplate.content);
  }
}
customElements.define("header-component", Header);
