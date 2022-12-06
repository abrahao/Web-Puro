class Header01 extends HTMLElement {
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

    const link01 = document.createElement("a");
    link01.setAttribute("class", "link01");
    link01.textContent = this.getAttribute("title1");
    link01.href = this.getAttribute("link-url1");

    const link02 = document.createElement("a");
    link02.setAttribute("class", "link02");
    link02.textContent = this.getAttribute("title2");
    link02.href = this.getAttribute("link-url2");

    const link03 = document.createElement("a");
    link03.setAttribute("class", "link03");
    link03.textContent = this.getAttribute("title3");
    link03.href = this.getAttribute("link-url3");

    const link04 = document.createElement("a");
    link04.setAttribute("class", "link04");
    link04.textContent = this.getAttribute("title4");
    link04.href = this.getAttribute("link-url4");

    const link05 = document.createElement("a");
    link05.setAttribute("class", "link05");
    link05.textContent = this.getAttribute("title5");
    link05.href = this.getAttribute("link-url5");

    const link06 = document.createElement("a");
    link06.setAttribute("class", "link06");
    link06.textContent = this.getAttribute("title6");
    link06.href = this.getAttribute("link-url6");

    header.appendChild(link01);
    header.appendChild(link02);
    header.appendChild(link03);
    header.appendChild(link04);
    header.appendChild(link05);
    header.appendChild(link06);

    componentRoot.appendChild(header);

    return componentRoot;
  }

  styles() {
    const style = document.createElement("style");
    style.textContent = `
          header {
            width: 35vw;
            margin: 2px;
            margin-left: 26px;
            padding: 1px;
            background: white;
            display: flex;
            flex-direction: row;
            justify-content: space-around;
          }
          .link01{
            font-weight: 500;
            color: blue;
            display: flex;
            flex-flow: column nowrap;
            text-decoration: none;
          }
          .link02{
            font-weight: 500;
            color: #AB2D25 ;
            display: flex;
            flex-flow: column nowrap;
            text-decoration: none;
          }
          .link03{
            font-weight: 500;
            color: green;
            display: flex;
            flex-flow: column nowrap;
            text-decoration: none;
          }
          .link04{
            font-weight: 500;
            color: orange;
            display: flex;
            flex-flow: column nowrap;
            text-decoration: none;
          }
          .link05{
            font-weight: 500;
            color: red;
            display: flex;
            flex-flow: column nowrap;
            text-decoration: none;
          }
          .link06{
            font-weight: 500;
            color: #173599;
            display: flex;
            flex-flow: column nowrap;
            text-decoration: none;
          }
      `;

    return style;
  }
}

customElements.define("header-01", Header01);