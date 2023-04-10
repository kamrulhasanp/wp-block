let registerBlockType = wp.blocks.registerBlockType;
let createElement = wp.element.createElement;

registerBlockType("blocks-course/firstblock", {
    edit: function () {
        return "Edit";
        return createElement("p", null, "Edit");
    },

    save: function () {
        return createElement("p", null, "Save");
    }
})