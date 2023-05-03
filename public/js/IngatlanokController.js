import AdatFeldolgozModel from "./AdatFeldolgozModel.js";
import IngatlanokView from "./IngatlanokView.js";

class IngatlanokController
{
    constructor()
    {
        const token = $(`meta[name="csrf-token"]`).attr("content");
        const adatFeldolgozModel = new AdatFeldolgozModel(token);

        adatFeldolgozModel.adatBe("/ingatlanok", this.ingatlanokFeltolt)

        $(window).on("erdekelGomb", (event)=>
        {
            console.log(event.detail);
            alert(`${event.detail.nev} ${event.detail.leiras} ${event.detail.hirdetesDatuma} ${event.detail.tehermentes} ${event.detail.ar} ${event.detail.kepUrl}`);
        })
    }
    ingatlanokFeltolt(tomb)
    {
        const szuloElem=$("article");
        new IngatlanokView(tomb, szuloElem);
    }
}
export default IngatlanokController