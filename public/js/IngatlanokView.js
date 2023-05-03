import IngatlanView from "./IngatlanView.js";

class IngatlanokView
{
    constructor(tomb, szuloElem)
    {
        $(szuloElem).html(`
        <table class="table">
            <tr>
                <th>Kategória</th>
                <th>Leírás</th>
                <th>Hírdetés dátuma</th>
                <th>Tehermentes</th>
                <th>Ár</th>
                <th>Fénykép</th>
                <th>Érdeklődés</th>
            </tr>        
        </table>
        `);

        $("#ujHirdetes").on("click", ()=>
        {
            $(".overlay").show();
            $(".tartalom").append(``)
        })

        $("#bezar").on("click", ()=>
        {
            $(".overlay").hide();
        });

        this.tableElem=szuloElem.children("table:last-child")
        this.tBody=this.tableElem.children("tbody");
        tomb.forEach(elem => 
        {
            new IngatlanView(elem, this.tBody);
        });
    }
    // kattintasTrigger(esemenyNeve)
    // {
    //     const esemeny = new CustomEvent(esemenyNeve, {detail: this.#elem});
    //     window.dispatchEvent(esemeny);
    // }
}
export default IngatlanokView