App.Components.LedgerCategoryForm = App.Components.Exploitable.Form.extend({
    template: "#category-form-template",
    data: function () {
        return {
            modal_id: '#ledger-category-form',
            emptyModel: {
                description: ''
            },
            category: {},
            saver: api.saveLedgerCategory
        }
    },
    computed: {
        model: {
            get: function() {
                return this.category;
            },
            set: function(model) {
                this.category = model;
            }
        }
    },
    watch: {
        category: function() {
            $('#category-name').typeahead('val', this.category.name);
        }
    },
    methods: {
        addNew: function() {
          $('#ledger-category-form').modal('show');
        },
        initTypeahead: function() {
            api.getLedgerCategoriesAutocomplete().then(data => {
                var names = data.name;
                $('#category-name').typeahead({
                    hint: true,
                    highlight: true,
                    minLength: 0
                }, {
                    source: function(req, callback) {
                        callback(names.filter(function(name) {
                            return name.toLowerCase().indexOf(req.toLowerCase()) !== -1;
                        }));
                    }
                });
            });
        }
    },
    ready: function () {
        if (this.$route.query.new) {
            this.addNew();
        }
        this.initTypeahead();
    }
});
