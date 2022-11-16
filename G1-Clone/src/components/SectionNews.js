class SectionNews extends HTMLElement {
  constructor() {
    super();

    const shadow = this.attachShadow({ mode: "open" });
    shadow.appendChild(this.build());
    shadow.appendChild(this.styles());
  }

  build() {
    const componentRoot = document.createElement("section");
    componentRoot.setAttribute("class", "article");

    // Article left
    const sectionLeft = document.createElement("article");
    sectionLeft.setAttribute("class", "article_left");

    const autor1 = document.createElement("span");
    autor1.textContent = (this.getAttribute("autor1") || "Sem notícias, por enquanto");

    const linkTitle1 = document.createElement("a");
    linkTitle1.textContent = this.getAttribute("title");
    linkTitle1.href = this.getAttribute("link-url");

    const newsContent1 = document.createElement("p");
    newsContent1.textContent = this.getAttribute("contet");

    sectionLeft.appendChild(autor1);
    sectionLeft.appendChild(linkTitle1);
    sectionLeft.appendChild(newsContent1);

    // Article right
    const sectionRight = document.createElement("article");
    sectionRight.setAttribute("class", "article_right");

    const autor2 = document.createElement("span");
    autor2.textContent = (this.getAttribute("autor") || "Notícia 2");

    const linkTitle2 = document.createElement("a");
    linkTitle2.textContent = this.getAttribute("title");
    linkTitle2.href = this.getAttribute("link-url");

    const newsContent2 = document.createElement("p");
    newsContent2.textContent = this.getAttribute("contet");

    sectionRight.appendChild(autor2);
    sectionRight.appendChild(linkTitle2);
    sectionRight.appendChild(newsContent2);
    
    componentRoot.appendChild(sectionLeft);
    componentRoot.appendChild(sectionRight);

    return componentRoot;
  }

  styles() {
    const style = document.createElement("style");
    style.textContent = `
        .article_left {
          border: 1px solid #B2B2B4 ;
          padding: 20%;
          margin: 5px;
          flex-direction: row;
        }
        .article_right {
          border: 1px solid #B2B2B4 ;
          padding: 20%;
          margin: 5px;
          flex-direction: row;
        }
        section {
          margin-top:10px;
          display: flex;
        }
    `;

    return style;
  }
}

customElements.define("section-news", SectionNews);