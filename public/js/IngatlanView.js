class IngatlanView
{
    #elem
    constructor(elem, szuloElem)
    {
        this.#elem=elem;
        console.log(elem.ingatlan_id);
        $(szuloElem).append(`
        <tr>
            <td>${elem.nev}</td>
            <td>${elem.leiras}</td>
            <td>${elem.hirdetesDatuma}</td>
            <td>${elem.tehermentes}</td>
            <td>${elem.ar}</td>
            <td>${elem.kepUrl}</td>
            <td><button class="button" id="gomb${elem.ingatlan_id}">Érdekel</button></td>
            </tr>`);

            $(".kategoria").append(`<option value=${elem.id}>${elem.nev}</option>`)

        $(`#gomb${elem.ingatlan_id}`).on("click", ()=>
        {
            console.log("érdekel");
            
            this.kattintasTrigger("erdekelGomb");
        });
    }

    kattintasTrigger(esemenyNeve)
    {
        const esemeny = new CustomEvent(esemenyNeve, {detail: this.#elem});
        window.dispatchEvent(esemeny);
    }
}
export default IngatlanView