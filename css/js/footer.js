const footerTemplate = document.createElement('template');

footerTemplate.innerHTML = 
<footer class="py-3 my-4">
    
    <p class="text-center text-muted border-top pb-4 mb-3">&copy; 2022 Pedidos, PCA</p>
  </footer>
  `;

  class Footer extends HTMLElement {
    constructor() {
      super();
    }
  
    connectedCallback() {
      const fontAwesome = document.querySelector('link[href*="font-awesome"]');
      const shadowRoot = this.attachShadow({ mode: 'closed' });
  
      if (fontAwesome) {
        shadowRoot.appendChild(fontAwesome.cloneNode());
      }
  
      shadowRoot.appendChild(footerTemplate.content);
    }
  }
  
  customElements.define('footer-component', Footer);