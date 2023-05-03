import AdatFeldolgozModel from "./AdatFeldolgozModel.js";
import IngatlanokView from "./IngatlanokView.js";

class IngatlanokController
{
    constructor()
    {
        const token = $(`meta[name="csrf-token"]`).attr("content");
        const adatFeldolgozModel = new AdatFeldolgozModel(token);

        adatFeldolgozModel.adatBe("/ingatlanok", this.ingatlanokFeltolt)
    }
    ingatlanokFeltolt(tomb)
    {
        const szuloElem=$("article");
        new IngatlanokView(tomb, szuloElem);
    }
}
export default IngatlanokController