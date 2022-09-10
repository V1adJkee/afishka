<div class="">
    <form id="form-search" name="form-search">
        <div class="typeahead__container">
            <div class="typeahead__field">
                <div class="typeahead__query">
                    <input class="js-typeahead-search" name="search[query]" placeholder="Поиск..." autocomplete="off">
                </div>
                <div class="typeahead__button">
                    <button type="submit">
                        <i class="typeahead__search-icon"></i>
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>

<script>
    $.typeahead({
        input: '.js-typeahead-search',
        minLength: 2,
        hint: true,
        group: true,
        maxItemPerGroup: 16,
        emptyTemplate: 'К сожалению, по вашему запросу ничего не найдено',
        source: {
            Всё: {
                ajax: {
                    url: "/search",
                    data: {
                        query: '@{{query}}'
                    }
                },

                dynamic: true
            }
        }
    });
</script>
