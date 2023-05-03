import IngatlanView from "./IngatlanView.js";

class IngatlanokView
{
    constructor(tomb, szuloElem)
    {
        tomb.forEach(elem => 
        {
            new IngatlanView(elem, szuloElem);
        });
    }
}
export default IngatlanokView