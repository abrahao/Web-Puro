class Header02 extends HTMLElement {
    constructor() {
      super();
  
      const shadow = this.attachShadow({ mode: "open" });
      shadow.appendChild(this.build());
      shadow.appendChild(this.styles());
    }
  
    build() {
      const componentRoot = document.createElement("header");
      componentRoot.setAttribute("class", "header");
  
      // header left
      const header = document.createElement("header");
  
      const tit_header = document.createElement("h3");
      tit_header.textContent = "g1";
      
      header.appendChild(tit_header);
      
      componentRoot.appendChild(header);
  
      return componentRoot;
    }
  
    styles() {
      const style = document.createElement("style");
      style.textContent = `
          .header {
            padding: 1px;
            margin-botton: 1px;
            background: red;
          }
          h3{
            font-weight: bold;
            color: white;
            display: flex;
            // flex-flow: column nowrap;
            justify-content: center;  
            // align-items: center;
          }
      `;
  
      return style;
    }
  }
  
  customElements.define("header-02", Header02);