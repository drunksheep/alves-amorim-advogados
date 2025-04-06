export default function buildHeadingList(container: HTMLElement): HTMLOListElement {
    const headings = container.querySelectorAll('h1, h2, h3, h4, h5, h6');
    const list = document.createElement('ol');
    list.classList.add('sidebar-headings');

    headings.forEach((heading, index) => {
        if (!heading.id) {
            heading.id = `heading-${index + 1}`;
        }

        const li = document.createElement('li');
        li.setAttribute('data-id', heading.id);

        const a = document.createElement('a');
        a.href = `#${heading.id}`;
        a.textContent = `${index + 1}. ${heading.textContent}`  || `Heading ${index + 1}`;

        li.appendChild(a);
        list.appendChild(li);
    });

    return list;
}