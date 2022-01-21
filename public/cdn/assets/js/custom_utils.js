var edit_location_toggle = 0;
// Config in applayouts.
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name=csrf-token]').attr('content')
    }
})

// if (show_uploaded_image_config != '') {
//     show_uploaded_image(show_uploaded_image_config)
// }




// $('#logo_uploader').uploadFile({

//     url: config.routes.api_upload_business_logo+'/'+image_business_id,
//     multiple: false,
//     maxFileCount: 3,
//     acceptFiles: 'image/*',
//     autoSubmit: true,
//     onSuccess: function (files, data, xhr, pd) {
//         show_uploaded_image(data)
//     }
// })

function show_uploaded_image(data) {


    $('#logo_uploader').hide()
    $('.ajax-file-upload-container').hide()
    $('#logo_image_display').attr('src', data)
    $('#logo_upload_success').show()
    $('#name_image_display').html($('#_name').val())
    $('#remove_icon_logo').show()
}

function on_click_logo_upload_remove() {
    $('#logo_uploader').show()
    $('#logo_upload_success').hide()
    $('#remove_icon_logo').hide()
}

function edit_button_toggle()
{
    // if(edit_location_toggle == 0)
    // {
    //     edit_location_toggle = edit_location_toggle+1;
    //     console.log(edit_location_toggle);
    // }
    // else
    // {
        if(edit_location_toggle == 0)
        {
            $('#add_business_service_location').show();
            $('#edit_toogle_block').hide();
            $('#selected_location_visible').show()

            edit_location_toggle = 1;
        }
        else if(edit_location_toggle == 1)
        {
            $('#add_business_service_location').hide();
            $('#edit_toogle_block').show();
            $('#selected_location_visible').hide()
            edit_location_toggle = 0;
        }

    // }

}



// For onboarding businesss
function api_update_onboard(uptask) {
    var name = $('[name="name"]').val()
    var country = $('[name="country"]').val()
    var location = $('[name="county"]').val()
    var presence = $('[name="presence"]').val()
    var website = $('[name="website"]').val()
    alert(location);
    if (name == '' || country == '' || location == '' || presence == '' || website == '') {
        iziToast.error({
            title: 'Complete all mandatory fields!',
            message: 'Some form fields are incomplete.',
            position: 'topRight'
        })
    } else {
        $.post(
            config.routes.api_update_onboard, {
                name: name,
                location: location,
                country: country,
                uptask: uptask,
                website: website,
                presence: presence
            },
            function(result) {
                business_id = result.id;
                $('[name="business_id"]').val(business_id)

                iziToast.success({
                    title: 'Updated!',
                    message: 'fields are updated.',
                    position: 'topRight'
                })

            }
        )
    }
}

// Jquery tag input.
function onAddTag(tag) {
    $.post(
        config.routes.add_business_product + '/' + tag, {
            product: tag,
            business_id: business_id
        },
        function(data, status) {
            if (data == 'success') {
                iziToast.success({
                    title: 'Added!',
                    message: 'Product was added.',
                    position: 'topRight'
                })
            } else {

                iziToast.error({
                    title: 'Errored!',
                    message: 'unable to add the product.',
                    position: 'topRight'
                })
            }

        }
    )
}

function onRemoveTag(tag) {
    $.post(
        config.routes.remove_business_product + '/' + tag, {
            product: tag,
            business_id: business_id
        },
        function(data, status) {
            iziToast.success({
                title: 'Removed!',
                message: 'Product was removed.',
                position: 'topRight'
            })
        }
    )
}

$(function() {

    $('#tags_1').tagsInput({
        defaultText: '+',
        width: '100%',
        onAddTag: onAddTag,
        onRemoveTag: onRemoveTag
    })



    $('#marketing_partner_required').tagsInput({
        defaultText: 'Add tag',
        width: '100%',
        onAddTag: addMarketingPatner,
        onRemoveTag: removeMarketingPatner
    })
    $('#marketing_partner_not_required').tagsInput({
        defaultText: 'Add tag',
        width: '100%',
        onAddTag: addMarketingPatnerNotRequired,
        onRemoveTag: removeMarketingPatner
    })

    $('#tags_interest').tagsInput({
        defaultText: '+',
        width: '100%',
        onAddTag: define_target_audience,
        onRemoveTag: remove_target_audience
    })

    $('#location_county').tagsInput({
        defaultText: '+',
        width: '100%',
        onAddTag: add_location_county,
        onRemoveTag: remove_location_county
    })

    $('#location_country').tagsInput({
        defaultText: '+',
        width: '100%',
        onAddTag: add_location_county,
        onRemoveTag: remove_location_county
    })

    $('#location_city').tagsInput({
        defaultText: '+',
        width: '100%',
        onAddTag: add_location_city,
        onRemoveTag: remove_location_city
    })

    $('#category_allows').tagsInput({
        defaultText: '+',
        width: '100%',
        onAddTag: add_business_category,
        onRemoveTag: remove_business_category
    })
    $('#category_allows_onboarding').tagsInput({
        defaultText: '+',
        width: '100%',
        onAddTag: add_business_category,
        onRemoveTag: remove_business_category
    })
    // $('#new_business_category').tagsInput({
    //     defaultText: '+',
    //     width: '100%',
    //     onAddTag: add_business_category,
    //     onRemoveTag: remove_business_category
    // })
    $('#business_find').tagsInput({
        defaultText: 'Keyword ',
        width: '100%',

    })
    $('#business_find_public').tagsInput({
        defaultText: 'Search',
        width: '100%',
        height:'auto',

        tagClass: 'form-control'


    })


    $('#location_zipcode').tagsInput({
        defaultText: '+',
        width: '100%',
        onAddTag: add_location_city,
        onRemoveTag: remove_location_city
    })
    $('#location_selected').tagsInput({
        defaultText: '+',
        width: '100%',
        onAddTag: add_location_city,
        onRemoveTag: remove_location_city
    })

    $('#tags_intrest_tag').attr('list', 'categories')
    $('#marketing_partner_required_tag').attr('list', 'marketing_partners_yes')
    $('#marketing_partner_not_required_tag').attr('list', 'marketing_partners_no')
    $('#location_tag').attr('list', 'location')
    $('#tags_1_tag').attr('list', 'business_products_list')
    $('#tags_interest_tag').attr('list', 'interests')
    $('#category_allows_tag').attr('list', 'categories')
    $('#business_find_tag').attr('list', 'business_category')
    // $('#new_business_category_tag').attr('list', 'categories')
    $('#category_allows_onboarding_tag').attr('list', 'categories')
    $('#business_find_public_tag').attr('list', 'business_category_landing')



})

function business_complete_onboard() {
    var product = $('#tags_1').val()
    if (product == '' || product == ' ') {
        iziToast.error({
            title: 'Products Needed!',
            message: 'Products cannot be empty.',
            position: 'topRight'
        })
    } else {
        $.post(config.routes.business_complete_onbording, {
            business_id: business_id
        }, function(
            data,
            status
        ) {
            $('#modal-onboarding').modal('hide')
            iziToast.success({
                title: 'Data saved!',
                message: 'All the details were saved.',
                position: 'topRight'
            })
            setTimeout(function() {
                location.reload();
            }, 1000);
        })
    }
}

// $('#modal-onboarding').modal('show')

function submit_add_new_business() {

    var new_business_name = $('[name="new_business_name"]').val()
    var new_business_oneliner = $('[name="new_business_oneliner"]').val()
    var new_business_website = $('[name="new_business_website"]').val()
    var new_business_country = $('[name="new_business_country"]').val()
    var new_business_location = $('[name="new_business_location"]').val()
    var new_business_presence = $('[name="new_business_presence"]:checked').val()
    var new_business_about = $('[name="new_business_about"]').val()
    if (new_business_name == '' || new_business_country == '' || new_business_location == '' || new_business_presence == '' || new_business_location == '' || new_business_oneliner == '' ) {
        iziToast.error({
            title: 'Complete all mandatory fields!',
            message: 'Some form fields are incomplete.',
            position: 'topRight'
        })
    }
    else if(new_business_oneliner.length > 200 )
    {
        iziToast.error({
            title: 'One line pitch too long!',
            message: 'Cannot exceed 200 characters.',
            position: 'topRight'
        })
    }

    else {
        $.post(
            config.routes.add_new_business_ajax, {
                new_business_name: new_business_name,
                new_business_oneliner: new_business_oneliner,
                new_business_location: new_business_location,
                new_business_country: new_business_country,
                new_business_about: new_business_about,
                new_business_presence: new_business_presence,
                new_business_website: new_business_website
            },
            function(result) {

                iziToast.success({
                    title: 'Updated!',
                    message: result.message,
                    position: 'topRight'
                })


                setTimeout(function() {
                    window.location.href = result.redirect
                }, 1000);
            }
        )
    }
}

function define_target_audience(tag) {



    var business_id = $('[name="business_id"]').val()
    // var max_age_targeted = $('[name="max_age_targeted"]').val()
    // var min_age_targeted = $('[name="min_age_targeted"]').val()
    // var gender_targeted = $("input[name='gender_targeted']:checked").val();
    // console.log(max_age_targeted, min_age_targeted);
    // if (min_age_targeted > max_age_targeted) {
    //     iziToast.error({
    //         title: 'Max age cannot be less than min age',
    //         message: 'Some form fields are incomplete.',
    //         position: 'topRight'
    //     })
    // } else {
        // var presence = $('[name="presence"]').val()
        // if (min_age_targeted == '' || min_age_targeted == -1 || min_age_targeted == -1 || gender_targeted === undefined || tag == '' || max_age_targeted == '') {
        //     iziToast.error({
        //         title: 'Complete all mandatory fields!',
        //         message: 'Some form fields are incomplete.',
        //         position: 'topRight'
        //     })
        // } else if (max_age_targeted < min_age_targeted) {

        //     iziToast.error({
        //         title: 'Max age cannot be less than min age',
        //         message: 'Some form fields are incomplete.',
        //         position: 'topRight'
        //     })
        // } else {
            $.post(
                config.routes.define_targeted_audience, {
                    // max_age_targeted: max_age_targeted,
                    // min_age_targeted: min_age_targeted,

                    // gender_targeted: gender_targeted,
                    interest_targeted: tag,
                    business_id: business_id


                },
                function(result) {

                    iziToast.success({
                        title: 'Updated!',
                        message: 'fields are updated.',
                        position: 'topRight'
                    })
                }
            )
        // }
    // }
}

function save_business_pref()
{
    var business_id = $('[name="business_id"]').val()
    var max_age_targeted = $('[name="max_age_targeted"]').val()
    var min_age_targeted = $('[name="min_age_targeted"]').val()
    var gender_targeted = $("input[name='gender_targeted']:checked").val();
   
    if (parseInt(min_age_targeted) > parseInt(max_age_targeted)) {
        iziToast.error({
            title: 'Max age cannot be less than min age',
            message: 'Some form fields are incomplete.',
            position: 'topRight'
        })
    }
    else
    {
        $.post(
            config.routes.define_targeted_pref, {
                max_age_targeted: parseInt(max_age_targeted),
                min_age_targeted: parseInt(min_age_targeted),
                gender_targeted: gender_targeted,
                business_id: business_id


            },
            function(result) {

                iziToast.success({
                    title: 'Updated!',
                    message: 'fields are updated.',
                    position: 'topRight'
                })
            }
        )
    }


}

function remove_target_audience(tag) {
    $.post(
        config.routes.remove_target_audience, {
            tag: tag


        },
        function(result) {

            iziToast.error({
                title: 'Updated!',
                message: 'fields are updated.',
                position: 'topRight'
            })
        }
    )
}


function save_business_location_county() {

    var county_select = $("#county_select").val()
    var business_id = $('[name="business_id"]').val()
    if (county_select == '') {
        iziToast.error({
            title: 'Complete all mandatory fields!',
            message: 'Some form fields are incomplete.',
            position: 'topRight'
        })
    } else {
        $.post(
            config.routes.add_business_location, {
                county_select: county_select,
                business_id: business_id,
                type: 1

            },
            function(result) {

                iziToast.success({
                    title: 'Updated!',
                    message: 'fields are updated.',
                    position: 'topRight'
                })
            }
        )
    }
}

function save_business_location_cities() {


    var city = $("#city").val()

    var business_id = $('[name="business_id"]').val()
    if (county_select == '') {
        iziToast.error({
            title: 'Complete all mandatory fields!',
            message: 'Some form fields are incomplete.',
            position: 'topRight'
        })
    } else {
        $.post(
            config.routes.add_business_location, {
                city: city,
                business_id: business_id,
                type: 2

            },
            function(result) {

                iziToast.success({
                    title: 'Updated!',
                    message: 'fields are updated.',
                    position: 'topRight'
                })
            }
        )
    }
}

function save_business_location_zipcodes() {


    var zipcode = $("#zipcode").val()
    var business_id = $('[name="business_id"]').val()
    if (county_select == '') {
        iziToast.error({
            title: 'Complete all mandatory fields!',
            message: 'Some form fields are incomplete.',
            position: 'topRight'
        })
    } else {
        $.post(
            config.routes.add_business_location, {
                zipcode: zipcode,
                business_id: business_id,
                type: 3

            },
            function(result) {

                iziToast.success({
                    title: 'Updated!',
                    message: 'fields are updated.',
                    position: 'topRight'
                })
            }
        )
    }

}

function business_location_save() {

    var business_id = $('[name="business_id"]').val()
    var country_selected = $('[name="country_selected"]').val()
    var country_restriction = $('[name="country_restriction"]').val()
    if (country_selected == '' || country_restriction == '' || business_id == '' || country_selected == 0) {
        iziToast.error({
            title: 'Complete all mandatory fields!',
            message: 'Some form fields are incomplete.',
            position: 'topRight'
        })
    } else {
        $('#add_business_service_location').submit();
        // $.post(
        //     config.routes.business_county,
        //     {
        //         business_id: business_id,
        //         country_selected: country_selected,
        //         country_restriction: country_restriction

        //     },
        //     function (result) {

        //         iziToast.success({
        //             title: 'Updated!',
        //             message: 'fields are updated.',
        //             position: 'topRight'
        //         })
        //     }
        // )
    }
}

function addMarketingPatner(tag) {

    var business_id = $('[name="business_id"]').val()
    if (tag == '') {
        iziToast.error({
            title: 'Complete all mandatory fields!',
            message: 'Some form fields are incomplete.',
            position: 'topRight'
        })
    } else {
        $.post(
            config.routes.add_marketing_partner_required, {
                tag: tag,
                business_id: business_id

            },
            function(result) {

                iziToast.success({
                    title: 'Updated!',
                    message: 'fields are updated.',
                    position: 'topRight'
                })
            }
        )
    }
}

function removeMarketingPatner(tag) {
    var business_id = $('[name="business_id"]').val()
    if (tag == '') {
        iziToast.error({
            title: 'Complete all mandatory fields!',
            message: 'Some form fields are incomplete.',
            position: 'topRight'
        })
    } else {
        $.post(
            config.routes.remove_marketing_partner, {
                tag: tag,
                business_id: business_id

            },
            function(result) {

                iziToast.success({
                    title: 'Updated!',
                    message: 'fields are updated.',
                    position: 'topRight'
                })
            }
        )
    }
}

function addMarketingPatnerNotRequired(tag) {
    var business_id = $('[name="business_id"]').val()
    if (tag == '') {
        iziToast.error({
            title: 'Complete all mandatory fields!',
            message: 'Some form fields are incomplete.',
            position: 'topRight'
        })
    } else {
        $.post(
            config.routes.add_marketing_partner_not_required, {
                tag: tag,
                business_id: business_id

            },
            function(result) {

                iziToast.success({
                    title: 'Updated!',
                    message: 'fields are updated.',
                    position: 'topRight'
                })
            }
        )
    }
}

function add_new_coupon() {

    $('#save_new_coupon').html('<i class="fa fa-asterisk fa-spin" style="color:white !important"></i> Adding')
    $('#save_new_coupon').attr('disabled', true)
    var business_id = $('[name="business_id"]').val()
    var coupon_title = $('[name="coupon_title"]').val()
    var promotion_type = $('[name="promotion_type"]').val()
    var coupon_description = $('[name="coupon_description"]').val()
    var tc_coupon = $('[name="tc_coupon"]').val()
    var coupon_discount = $('[name="coupon_discount"]').val()
    var coupon_retail = $('[name="coupon_retail"]').val()
    var item_currency = $('[name="item_currency"]').val()
    var coupon_limit_count = $('[name="coupon_limit_count"]').val()
    var coupon_limit_period = $('[name="coupon_limit_period"]').val()
    // var coupon_avail_count = $('[name="coupon_avail_count"]').val()
    var coupon_partner = $('[name="coupon_partner"]').val()
    if (coupon_partner == '') {
        coupon_partner = 0
    }

    if (coupon_title == '' || coupon_description == '' || tc_coupon == '' ||
        coupon_discount == '' || coupon_retail == '' || item_currency == '' ||
        coupon_limit_count == '' || coupon_limit_period == '' ||
        promotion_type == '') {
        iziToast.error({
            title: 'Complete all mandatory fields!',
            message: 'Some form fields are incomplete.',
            position: 'topRight'
        })
        $('#save_new_coupon').html('<i class="fa fa-check "></i> Save promotion')
        $('#save_new_coupon').attr('disabled', false)
    } else {
        $.post(
            config.routes.add_new_coupon, {
                business_id: business_id,
                coupon_title: coupon_title,
                coupon_description: coupon_description,
                tc_coupon: tc_coupon,
                coupon_discount: coupon_discount,
                coupon_retail: coupon_retail,
                item_currency: item_currency,
                coupon_limit_count: coupon_limit_count,
                coupon_limit_period: coupon_limit_period,

                coupon_partner: coupon_partner,
                promotion_type: promotion_type



            },
            function(result) {

                iziToast.success({
                    title: 'Updated!',
                    message: 'fields are updated.',
                    position: 'topRight'
                })
                $('#save_new_coupon').html('<i class="fa fa-check " style="color:white !important"></i> Save promotion')
                $('#save_new_coupon').attr('disabled', false)
                setTimeout(function() {
                    location.reload()
                }, 1000);

            }
        )
    }

}

function add_location_county(tag) {
    var upper_tag = tag.toUpperCase();
    var business_id = $('[name="business_id"]').val()
    $.post(
        config.routes.add_new_county_location, {
            business_id: business_id,
            county_name: upper_tag

        },
        function(result) {

            iziToast.success({
                title: 'Updated!',
                message: 'fields are updated.',
                position: 'topRight'
            })
        }
    )
}

function remove_location_county(tag) {
    var upper_tag = tag.toUpperCase();
    var business_id = $('[name="business_id"]').val()
    $.post(
        config.routes.remove_new_county_location, {
            business_id: business_id,
            county_name: upper_tag

        },
        function(result) {

            iziToast.success({
                title: 'Updated!',
                message: 'fields are updated.',
                position: 'topRight'
            })
        }
    )
}

function add_location_city(tag) {
    var upper_tag = tag.toUpperCase();
    var business_id = $('[name="business_id"]').val()
    var country_selected = $('[name="country_selected"]').val()

    var country_restriction = $("input[name='country_restriction']:checked").val();
    if(country_selected == 2)
    {
        $.post(
            config.routes.add_new_city_location_us, {
                business_id: business_id,
                city_name: upper_tag,
                country_selected: country_selected,
                country_restriction: country_restriction

            },
            function(result) {


            }
        )
    }
    else if(country_selected == 1)
    {
        $.post(
            config.routes.add_new_city_location_in, {
                business_id: business_id,
                zip_code:tag,
                country_selected: country_selected,



            },
            function(result) {


            }
        )
    }


}

function update_website_business(request) {

    var business_id = $('[name="business_id"]').val()


    if (request == 'edit') {
        var website_business = $('[name="re_business_website"]').val()
    } else {
        var website_business = $('[name="website_business"]').val()
    }

    if (website_business == '') {
        iziToast.error({
            title: 'Please fill miminum 100 characters!',
            message: 'Some form fields are incomplete.',
            position: 'topRight'
        })
    } else {
        $.post(
            config.routes.update_business_website, {
                business_id: business_id,
                website_business: website_business

            },
            function(result) {

                iziToast.success({
                    title: 'Updated!',
                    message: 'fields are updated.',
                    position: 'topRight'
                })
                setTimeout(function() {
                    location.reload()
                }, 1000);


            }
        )
    }

}
$('.new_business_country').on('change', function() {

    if(this.value == 1)
    {
        $('.new_business_us_county').hide()
        $('.new_business_indian_district').show()
    }
    else if(this.value == 2)
    {
        $('.new_business_us_county').show()
        $('.new_business_indian_district').hide()
    }



});





function add_business_category(tag) {

    // var business_cat = $('[name="category_allows"]').val()
    var business_id = $('[name="business_id"]').val()
    if (business_id === undefined || tag == ' ') {
        iziToast.error({
            title: 'Complete all mandatory fields!',
            message: 'Some form fields are incomplete.',
            position: 'topRight'
        })
    } else {
        $.post(
            config.routes.add_business_category, {
                business_id: business_id,
                business_cat: tag

            },
            function(result) {

                iziToast.success({
                    title: 'Updated!',
                    message: 'fields are updated.',
                    position: 'topRight'
                })
            }
        )
    }


}

function remove_business_category(tag) {

    var business_id = $('[name="business_id"]').val()
    if (business_id === undefined || tag == ' ') {
        iziToast.error({
            title: 'Complete all mandatory fields!',
            message: 'Some form fields are incomplete.',
            position: 'topRight'
        })
    }

    $.post(
        config.routes.remove_business_category, {
            business_id: business_id,
            business_cat: tag

        },
        function(result) {

            iziToast.success({
                title: 'Updated!',
                message: 'fields are updated.',
                position: 'topRight'
            })
        }
    )
}

function remove_location_city(tag) {
    var upper_tag = tag.toUpperCase();
    var business_id = $('[name="business_id"]').val()
    if (tag == 'All cities') {
        upper_tag = 'All'
    }
    $.post(
        config.routes.remove_new_city_location, {
            business_id: business_id,
            city_name: upper_tag

        },
        function(result) {

            iziToast.success({
                title: 'Updated!',
                message: 'fields are updated.',
                position: 'topRight'
            })
        }
    )
}

function business_redeem_coupon() {

    var business_id = $('[name="business_id"]').val()
    var first_part = $('[name="first_part_coupon"]').val()
    var second_part = $('[name="second_part_coupon"]').val()
    var third_part = $('[name="third_part_coupon"]').val()

    if (first_part == '' || second_part == '' || third_part == '') {
        iziToast.error({
            title: 'Complete all mandatory fields!',
            message: 'Some form fields are incomplete.',
            position: 'topRight'
        })
        $('#business_redeem_coupon').html('<i class="fa fa-check "></i> Save promotion')
        $('#business_redeem_coupon').attr('disabled', false)
    } else {
        var promotion_code = first_part + '-' + second_part + '-' + third_part
        $.post(
            config.routes.redeem_promotion_coupon, {
                business_id: business_id,
                promotion_code: promotion_code

            },
            function(result) {
                if (result.status == 'error') {
                    iziToast.error({
                        title: 'Error!',
                        message: result.message,
                        position: 'topRight'
                    })
                } else {
                    iziToast.success({
                        title: 'Success!',
                        message: result.message,
                        position: 'topRight'
                    })
                }


            }
        )
    }

}

$('#save_business_pref').hide();
$('#edit_business_pin').hide();
$('#edit_business_website').hide();
$('#edit_business_about').hide();
$('.new_business_indian_district').hide();
$('.new_business_us_county').hide();

function editbusinesswebsite() {
    $('#edit_business_website').show();
    $('#website_exist_text').hide();
    $('#website_exist_btn').hide();
}

function editbusinesspref() {
    $('#save_business_pref').show();
    $("#gender_targeted_male").attr("disabled", false);
    $("#gender_targeted_female").attr("disabled", false);
    $("#gender_targeted_both").attr("disabled", false);
    $("#max_age_targeted").attr("readonly", false);
    $("#min_age_targeted").attr("readonly", false);

    $('#edit_business_pref').hide();
    // $('#website_exist_btn').hide();
}

function editbusinessabout() {
    $('#edit_business_about').show();
    $('#about_exist_text').hide();
    $('#about_exist_btn').hide();
}



function editbusinesspin() {

    $('#edit_business_pin').show();
    $('#pin_exist_text').hide();
    $('#pin_exist_btn').hide();
}

function generate_business_pin(type) {

    var business_id = $('[name="business_id"]').val()
    if (type == 'edit') {
        var business_pin = $('[name="re_business_pin"]').val()
    } else {
        var business_pin = $('[name="business_pin"]').val()
    }




    if (business_pin == '') {
        iziToast.error({
            title: 'Complete all mandatory fields!',
            message: 'Some form fields are incomplete.',
            position: 'topRight'
        })
        // $('#generate_business_pin').html('<i class="fa fa-check "></i> Save promotion')
        // $('#generate_business_pin').attr('disabled', false)
    } else {

        $.post(
            config.routes.generate_business_pin, {
                business_id: business_id,
                business_pin: business_pin

            },
            function(result) {
                if (result.status == 'error') {
                    iziToast.error({
                        title: 'Error!',
                        message: result.message,
                        position: 'topRight'
                    })
                } else {
                    iziToast.success({
                        title: 'Success!',
                        message: result.message,
                        position: 'topRight'
                    })
                    setTimeout(function() {
                        location.reload();
                    }, 1000);
                }


            }
        )
    }
}


function collaborate_business() {
    var selected_business_id = $('[name="selected_business"]').val()
    var inviter_business_id = $('[name="inviter_business_id"]').val()
    var invite_id = $('[name="invite_id"]').val()
    var type = 0;
    if (selected_business_id == '' || inviter_business_id == '' || invite_id == '') {
        iziToast.error({
            title: 'Complete all mandatory fields!',
            message: 'Some form fields are incomplete.',
            position: 'topRight'
        })
    } else {
        $.post(
            config.routes.create_collaboration, {
                selected_business_id: selected_business_id,
                inviter_business_id: inviter_business_id,
                invite_id: invite_id,
                type:type

            },
            function(result) {
                if (result.status == 'error') {
                    iziToast.error({
                        title: 'Error!',
                        message: result.message,
                        position: 'topRight'
                    })
                } else {
                    iziToast.success({
                        title: 'Success!',
                        message: result.message,
                        position: 'topRight'
                    })
                    setTimeout(function() {
                        location.reload();
                    }, 1000);
                }


            }
        )
    }

}

function collaborate_business_accept() {

    var selected_business_id = $('[name="inviter_request_to"]').val()
    var inviter_business_id = $('[name="inviter_request_from"]').val()
    var invite_id = $('[name="collab_id"]').val()
    var type = 1;
    if (selected_business_id == '' || inviter_business_id == '' || invite_id == '') {
        iziToast.error({
            title: 'Complete all mandatory fields!',
            message: 'Some form fields are incomplete.',
            position: 'topRight'
        })
    } else {
        $.post(
            config.routes.create_collaboration, {
                selected_business_id: selected_business_id,
                inviter_business_id: inviter_business_id,
                invite_id: invite_id,
                type:type

            },
            function(result) {
                if (result.status == 'error') {
                    iziToast.error({
                        title: 'Error!',
                        message: result.message,
                        position: 'topRight'
                    })
                } else {
                    iziToast.success({
                        title: 'Success!',
                        message: result.message,
                        position: 'topRight'
                    })
                    setTimeout(function() {
                        location.reload();
                    }, 1000);
                }


            }
        )
    }
}

function request_collaboration(request_to) {
    alert(request_to);
    var selected_business_id = $('[name="selected_business_request"]').val();

}

function change_account_pass() {


    current_password = $('#current_password').val();
    user_confirm_password = $('#user_confirm_password').val();
    user_new_password = $('#user_new_password').val();

    if (user_confirm_password == '' || user_confirm_password == ' ' || user_new_password == '' || user_new_password == ' ') {
        iziToast.error({
            title: 'Complete all mandatory fields!',
            message: 'Some form fields are incomplete.',
            position: 'topRight'
        })
    } else {

        if (user_new_password == user_confirm_password) {
            // $('#change_password').html('<i class="fa fa-asterisk fa-spin" style="color:white !important"></i> Updating');
            // $('#change_password').attr('disabled', true);
            $.post(config.routes.reset_password_post, {

                current_password: current_password,
                user_new_password: user_new_password,
                user_confirm_password: user_confirm_password,


            }, function(result) {

                if (result.status == 'success') {
                    // right_notify('success', result.message);
                    // setTimeout(function () { location.reload() }, 3000);
                    iziToast.success({
                        title: 'Success!',
                        message: result.message,
                        position: 'topRight'
                    })


                } else if (result.status == 'error') {
                    iziToast.error({
                        title: 'Success!',
                        message: result.message,
                        position: 'topRight'
                    })
                    // right_notify('danger', result.message);
                    // $('#change_password').html(' <i class="fa fa-asterisk mr-10"></i> Change Password');
                    // $('#change_password').attr('disabled', false);
                }

            });
        } else {
            iziToast.error({
                title: 'Success!',
                message: "New password doesn't match",
                position: 'topRight'
            })


        }
    }
}

function change_business_presence(cb, business_id) {

    if (business_id == '' || cb == '') {
        iziToast.error({
            title: 'Complete all mandatory fields!',
            message: 'Some form fields are incomplete.',
            position: 'topRight'
        })
    } else {
        if (cb.checked == true) {
            presence = 'on';
        } else {
            presence = 'off';
        }
        $.post(
            config.routes.change_business_presence, {
                business_id: business_id,
                presence: presence


            },
            function(result) {
                if (result.status == 'error') {
                    iziToast.error({
                        title: 'Error!',
                        message: result.message,
                        position: 'topRight'
                    })
                } else {
                    iziToast.success({
                        title: 'Success!',
                        message: result.message,
                        position: 'topRight'
                    })
                    setTimeout(function() {
                        location.reload();
                    }, 1000);
                }


            }
        )



    }
}


$(function() {


    $("#us_county_select").change(async function() {

        // https://connectchief.com/api/us/cities/
        // var county_select = $("#county_select").val();
        var county_select = this.value;
        console.log("https://connectchief.com/api/us/cities/" + county_select);
        return new Promise((resolve, reject) => {
            $.get("https://connectchief.com/api/us/cities/" + county_select, function(data, status) {
                console.log(data);

                for (var i = 0; i < data.length; i++) {

                    // $('#location_zipcode').tagsInput('add', data[i].City);
                    $('#location_zipcode').addTag(data[i].City);

                }
                iziToast.success({
                    title: 'Updated!',
                    message: 'fields are updated.',
                    position: 'topRight'
                })


            });
        });

    });

    $("#indian_district_select").change(async function() {

       // https://connectchief.com/api/indian/cities/
        // var county_select = $("#county_select").val();
        var district_select = this.value;
        console.log("https://connectchief.com/api/indian/cities/" + district_select);
        return new Promise((resolve, reject) => {
            $.get("http://localhost/connectchief/api/indian/cities/" + district_select, function(data, status) {
                console.log(data);

                for (var i = 0; i < data.length; i++) {

                    // $('#location_zipcode').tagsInput('add', data[i].City);
                    $('#location_zipcode').addTag(data[i]);

                }
                iziToast.success({
                    title: 'Updated!',
                    message: 'fields are updated.',
                    position: 'topRight'
                })


            });
        });

    });
})

function business_find() {

    var service_keyword = $('[name="service_keyword"]').val();

    var boolean_request = $('[name="boolean_request"]').val();
    var type_search = $('[name="type_search"]').val();

    if (service_keyword == '' || boolean_request == '' || type_search == '') {
        iziToast.error({
            title: 'Complete all mandatory fields!',
            message: 'Some form fields are incomplete.',
            position: 'topRight'
        })
    } else {

        $('#find_business_button').submit();
    }

}

function business_find_landing()
{
    var keyword = $('[name="service_keyword"]').val();

    if (keyword == '') {
        iziToast.error({
            title: 'Complete all mandatory fields!',
            message: 'Some form fields are incomplete.',
            position: 'topRight'
        })
    } else {
        $('#search_business_landing').submit();

    }
}

function create_collab_request() {
    var request_from = $('[name="request_from"]').val();
    var request_to = $('[name="request_to"]').val();

    if (request_from == '' || request_to == '' || request_from == -1) {
        iziToast.error({
            title: 'Complete all mandatory fields!',
            message: 'Some form fields are incomplete.',
            position: 'topRight'
        })
    }
    else {
        $.post(
            config.routes.create_business_collab_request, {
                request_to: request_to,
                request_from: request_from


            },
            function(result) {
                if (result.status == 'error') {
                    iziToast.error({
                        title: 'Error!',
                        message: result.message,
                        position: 'topRight'
                    })
                } else {
                    iziToast.success({
                        title: 'Success!',
                        message: result.message,
                        position: 'topRight'
                    })
                    setTimeout(function() {
                        location.reload();
                    }, 1000);
                }


            }
        )

    }

}


$('.us_county').hide()
$('#location_zipcode_visible').show()
$('#save_liner_btn').hide()

$('.indian_county').hide()
$('.selected_cities').hide()
$('#business_location_save').show()
$('#selected_location_visible').hide()
$('.country_selected').on('change', function() {

    $('input[name="country_restriction"]').prop('checked', false);


    if (this.value == 1 ) {
        // $('.us_county').hide()
        // $('.indian_county').show()
        $('.indian_county').hide()
        $('.us_county').hide()
        $('.selected_cities').hide()
        county_selected_val =1

    } else if (this.value == 2 ) {
        // $('.us_county').show()
        // $('.indian_county').hide()
        $('.indian_county').hide()
        $('.us_county').hide()
        $('.selected_cities').hide()
        county_selected_val =2
    }



});

$(".county_option").click(function() {

    var current_radio = $(this).attr("data-radio");

    if (current_radio == 0) {
        $('.us_county').hide()
        $('.indian_county').hide()
        $('.selected_cities').hide()
        $('#business_location_save').show()

    } else if (current_radio == 1 && county_selected_val == 1) {
        $('.us_county').hide()
        $('.indian_county').show()
        $('.selected_cities').show()
        $('#business_location_save').hide()
    } else if (current_radio == 1 && county_selected_val == 2) {
        $('.us_county').show()
        $('.indian_county').hide()
        $('.selected_cities').show()
        $('#business_location_save').hide()
    }

});

function update_business_profile() {
    var business_id = $("input[name='business_id']").val();
    var business_name = $("input[name='business_name']").val();
    var business_country = $("select[name='business_country']").val();
    var business_location = $("input[name='business_location']").val();
    var business_presence = $("input[name='business_presence']:checked").val();
    if(business_presence == 'online')
    {
        business_location = '';
    }



    if (business_name == '' || business_country == '' || business_presence == '') {
        iziToast.error({
            title: 'Complete all mandatory fields!',
            message: 'Some form fields are incomplete.',
            position: 'topRight'
        })
    } else {
        $.post(
            config.routes.update_business_profile, {
                business_id: business_id,
                business_name: business_name,
                business_country: business_country,
                business_location: business_location,
                business_presence: business_presence

            },
            function(result) {
                if (result.status == 'error') {
                    iziToast.error({
                        title: 'Error!',
                        message: result.message,
                        position: 'topRight'
                    })
                } else {
                    iziToast.success({
                        title: 'Success!',
                        message: result.message,
                        position: 'topRight'
                    })
                    setTimeout(function() {
                        location.reload();
                    }, 1000);
                }


            }
        )
    }

}

function editbusinesstask() {

    // $('#partner_task_text').hide();
    // $('#hire_task_text').hide();
    // $('#partner_task_text_edit').show();
    // $('#hire_task_text_edit').show();
     $('#task_edit_btn').hide();
     $("#task_save_btn").show();
     $("#partner_task_details").attr("disabled", false);
     $("#hire_task_details").attr("disabled", false);
     $("#partner_task_check").attr("disabled", false);
     $("#hire_task_check").attr("disabled", false);
}

function update_business_liner(request)
{

    var business_id = $('[name="business_id"]').val()
    var oneliner = $('[name="re_business_liner"]').val()
    if (oneliner.length < 10) {
        iziToast.error({
            title: 'Please fill miminum 100 characters!',
            message: 'Some form fields are incomplete.',
            position: 'topRight'
        })
    } else {
        $.post(
            config.routes.update_business_oneliner, {
                business_id: business_id,
                oneliner: oneliner

            },
            function(result) {

                iziToast.success({
                    title: 'Updated!',
                    message: 'fields are updated.',
                    position: 'topRight'
                })
                if (request == 'new') {
                    setTimeout(function() {
                        window.location.href = result.redirect
                    }, 1000);
                } else if (request == 'edit') {
                    setTimeout(function() {
                        location.reload()
                    }, 1000);
                }

            }
        )
    }
}
function update_about_business(request) {

    var business_id = $('[name="business_id"]').val()
    if (request == 'edit') {
        var about_business = $('[name="re_business_about"]').val()
    } else {
        var about_business = $('[name="about_business"]').val()
    }


    if (about_business.length < 10) {
        iziToast.error({
            title: 'Please fill miminum 100 characters!',
            message: 'Some form fields are incomplete.',
            position: 'topRight'
        })
    } else {
        $.post(
            config.routes.update_business_about, {
                business_id: business_id,
                about_business: about_business

            },
            function(result) {

                iziToast.success({
                    title: 'Updated!',
                    message: 'fields are updated.',
                    position: 'topRight'
                })
                if (request == 'new') {
                    setTimeout(function() {
                        window.location.href = result.redirect
                    }, 1000);
                } else if (request == 'edit') {
                    setTimeout(function() {
                        location.reload()
                    }, 1000);
                }

            }
        )
    }

}



$(document).ready(function() {
    if($('#partner_task_check').is(":checked"))
    {
        $("#partner_task_text").show();
    }
    else
    {
        $("#partner_task_text").hide();
    }
    if($('#hire_task_check').is(":checked"))
    {
        $("#hire_task_text").show();
    }
    else
    {
        $("#hire_task_text").hide();
    }


        $('#add_business_service_location').hide();

        $("#task_save_btn").hide();
    $("#save_business_profile").hide();


    $('#edit_business_profile').click(function() {
        $("#edit_business_profile").hide();
        $("#save_business_profile").show();
        $("input[name='business_name']").attr("readonly", false);
        $("select[name='business_country']").attr("readonly", false);
        $("input[name='business_location']").attr("readonly", false);
        $("#type_instore").attr("disabled", false);
        $("#type_online").attr("disabled", false);

    });
});

function editbusinessliner()
{

         $('#edit_liner_btn').hide();
         $('#save_liner_btn').show();
         $("input[name='re_business_liner']").attr("readonly", false);
        // $("#edit_business_profile").hide();
        // $("#save_business_profile").show();
        // $("input[name='business_name']").attr("readonly", false);
        // $("select[name='business_country']").attr("readonly", false);
        // $("input[name='business_location']").attr("readonly", false);

}

function collaborate_business_popup() {
    $('#modal-collaborate-business').modal('show')
}

function update_business_task()
{
    var business_id = $("input[name='business_id']").val();
    var partner_task_check = $('#partner_task_check').is(":checked");
    var hire_task_check = $('#hire_task_check').is(":checked");

    if(partner_task_check == true)
    {
        var partner_task_text = $('#partner_task_details').val();
        if(partner_task_text == '')
        {
            iziToast.error({
                title: 'Error!',
                message: 'Fill required feilds',
                position: 'topRight'
            })
        }
    }
    if(hire_task_check == true)
    {
        var hire_task_text = $('#hire_task_details').val();
        if(hire_task_text == '')
        {
            iziToast.error({
                title: 'Error!',
                message: 'Fill required feilds',
                position: 'topRight'
            })
        }
    }
    $.post(
        config.routes.update_business_task, {
            business_id: business_id,
            partner_task_check: partner_task_check,
            hire_task_check: hire_task_check,
            partner_task_text: partner_task_text,
            hire_task_text: hire_task_text

        },
        function(result) {
            if (result.status == 'error') {
                iziToast.error({
                    title: 'Error!',
                    message: result.message,
                    position: 'topRight'
                })
            } else {
                iziToast.success({
                    title: 'Success!',
                    message: result.message,
                    position: 'topRight'
                })
                setTimeout(function() {
                    location.reload();
                }, 1000);
            }


        }
    )



}
// $(document).ready(function() {

//     var partner_check = $("#partner_task_check");
//     var hire_check = $("input[name='hire_task_check']").val();
//     alert(partner_check.checked);
//     $("#partner_task_text").hide();
//     $("#hire_task_text").hide();
// });

function partner_task()
{
    if($('#partner_task_check').is(":checked"))
            $("#partner_task_text").show();
        else
            $("#partner_task_text").hide();
}

function hire_task()
{
    if($('#hire_task_check').is(":checked"))
            $("#hire_task_text").show();
        else
            $("#hire_task_text").hide();
}

$(function() {
    // https://connectchief.com/user/business/count
    console.log("/connectchief/user/business/count");
    return new Promise((resolve, reject) => {
        $.get("https://connectchief.com/user/business/count", function(data, status) {
            console.log(data);
            if(data == 0)
            {
                $('#create-new-business').modal('show')
            }
            else
            {

                $('#create-new-business').modal('hide')

            }
        });
    });

})

function invite_business_member()
{
    var business_id = $("input[name='business_id']").val();

    var invite_requests = $("input[name='invite_requests']").val();
    if(invite_requests == ' ')
    {

            iziToast.error({
                title: 'Error!',
                message: 'Fill required feilds',
                position: 'topRight'
            })

    }
    else
    {
        $('#invite_business_member').html('<i class="fa fa-asterisk fa-spin" style="color:white !important"></i> Sending');
        $('#invite_business_member').css({
            "pointer-events": "none",
            "cursor": "default"
          });
        $.get(
            config.routes.send_invite_requests, {
                business_id: business_id,
                invite_requests: invite_requests
            },
            function(result) {
                if (result.status == 'error') {
                    iziToast.error({
                        title: 'Error!',
                        message: result.message,
                        position: 'topRight'
                    })
                    $('#invite_business_member').html('<i class="fa fa-close" style="color:white !important"></i> Error occured! Send Again');
                    $('#invite_business_member').css({
                        "pointer-events": "auto",
                        "cursor": "default"
                      });
                } else {
                    iziToast.success({
                        title: 'Success!',
                        message: result.message,
                        position: 'topRight'
                    })
                    $('#invite_business_member').html('<i class="fa fa-check" style="color:white !important"></i> Sent');
                    setTimeout(function() {
                        location.reload();
                    }, 1000);
                }


            }
        )
    }

}

function visitor_enquire()
{
    var visitor_name = $("input[name='visitor_name']").val();
    var visitor_email =  $("input[name='visitor_email']").val();
    var visitor_subject =  $("input[name='visitor_subject']").val();
    // var visitor_phone =  $("input[name='visitor_phone']").val();
    var visitor_message = $("#visitor_message").val();

    if(visitor_name == '' || visitor_email == '' || visitor_subject == '' ||  visitor_message == '')
    {
            iziToast.error({
                title: 'Error!',
                message: 'All fields are required',
                position: 'topRight'
            })
    }

    else {
        $('#visitor_enquire').html('<i class="fa fa-asterisk fa-spin" style="color:white !important"></i> Sending');
        $('#visitor_enquire').css({
            "pointer-events": "none",
            "cursor": "default"
          });
        $.get(
            public_config.public_routes.visitor_enquire_request, {
                visitor_name: visitor_name,
                visitor_email: visitor_email,
                visitor_subject: visitor_subject,
                visitor_phone: visitor_phone,
                visitor_message: visitor_message


            },
            function(result) {
                if (result.status == 'error') {
                    iziToast.error({
                        title: 'Error!',
                        message: result.message,
                        position: 'topRight'
                    })
                    $('#visitor_enquire').html('<i class="fa fa-close" style="color:white !important"></i> Error occured! Send Again');
                    $('#visitor_enquire').css({
                        "pointer-events": "auto",
                        "cursor": "default"
                      });
                } else {
                    iziToast.success({
                        title: 'Success!',
                        message: result.message,
                        position: 'topRight'
                    })
                    $('#visitor_enquire').html('<i class="fa fa-check" style="color:white !important"></i> Sent');

                }


            }
        )

    }

}
