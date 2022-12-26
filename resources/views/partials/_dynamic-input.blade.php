<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script type="text/javascript">
    var i = 0;
    var s = 0;
    var k = 0;
    $(".add_ph_number").click(function() {
        ++i;
        $("#dynamicAddRemove").append(`<div class="container h-full parent-add-epi">
        <div class="input-group mb-3">
            <input aria-describedby="basic-addon2"
                aria-label="Phone Number" class="form-control phoneMask"
                placeholder="(+95) 000-000-0000" name="ph_numbers[` +
            i + `]" type="tel" id="phoneMask">
            <span class="input-group-text remove_ph_number"
                id="basic-addon2"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/></svg></span>
        </div>
    </div>`);
        $(".phoneMask").mask("(+99) 999-999-9999");
    });
    $(document).on('click', '.remove_ph_number', function() {
        $(this).parent('div').remove();
    });

    $(".add_social").click(function() {
        ++s;
        $("#dynamicAddRemoveSocials").append(`<div class="main-form-group mt-4">
                                                <label class="form-label">Select Social Media</label>
                                                <select name="socials[` + s + `][title]" aria-describedby="basic-addon1"
                                                    class="form-control form-select select2"
                                                    data-bs-placeholder="Select Country" data-select2-id="1"
                                                    tabindex="-1" aria-hidden="true">
                                                    @foreach ($icons as $item)
                                                        <option value="{{ $item->title }}">{{ $item->title }}</option>
                                                    @endforeach
                                                </select>
                                                <label class="form-label">Account URL</label>
                                                <input type="url" class="form-control mb-4"
                                                    placeholder="URL here" name="socials[` + s + `][url]">
                                                <button type="button"
                                                    class="btn btn-danger btn-sm btn-block remove_social">Remove</button>
                                            </div>`);
    });
    $(document).on('click', '.remove_social', function() {
        $(this).parent('div').remove();
    });
    $(".add_skill").click(function() {
        ++k;
        $("#dynamicAddRemoveSkills").append(`<div class="main-form-group mt-4">
        <div class="form-group">
            <label class="form-label text-dark">Skill Title</label>
            <input type="text" class="form-control" name="skills[` + k + `][title]"
                placeholder="Enter your title">
        </div>
        <div class="form-group">
            <label for="rangeSkill" class="form-label text-dark">Select your skill
                percent</label>
            <input class="rangeslider1 irs-hidden-input" id="rangeSkill"
                name="skills[` + k + `][percentage]" type="hidden" tabindex="-1" readonly>
        </div>
        <button type="button"
            class="btn btn-danger btn-sm btn-block remove_skill">Remove</button>
    </div>`);
        $(".rangeslider1").ionRangeSlider();
    });
    $(document).on('click', '.remove_skill', function() {
        $(this).parent('div').remove();
    });
</script>
