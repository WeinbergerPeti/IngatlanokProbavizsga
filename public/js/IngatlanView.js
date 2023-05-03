class IngatlanView
{
    #elem
    constructor(elem, szuloElem)
    {
        this.#elem=elem;

        $(szuloElem).append(`${elem.id}`);
    }
}
export default IngatlanView