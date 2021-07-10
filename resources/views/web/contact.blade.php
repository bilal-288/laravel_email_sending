@extends('web/master')
@section('tcp')

<!-- Breadcrumbs -->
                    <div class="breadcrumbs_container sc_layouts_row sc_layouts_row_type_normal sc_layouts_hide_on_frontpage scheme_dark">
                        <div class="sc_layouts_column sc_layouts_column_align_center sc_layouts_column_icons_position_left">
                            <div class="sc_content sc_content_default">
                                <div class="sc_content_container">
                                    <div class="sc_layouts_item">
                                        <div class="sc_layouts_title">
                                            <div class="sc_layouts_title_title">
                                                <h2 class="sc_layouts_title_caption">Contacts</h2>
                                            </div>
                                            <div class="sc_layouts_title_breadcrumbs">
                                                <div class="breadcrumbs">
                                                    <a class="breadcrumbs_item home" href="index.html">Home</a>
                                                    <span class="breadcrumbs_delimiter"></span>
                                                    <span class="breadcrumbs_item current">Contacts</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Breadcrumbs -->

<!-- Page content wrap -->
                <div class="page_content_wrap scheme_default">
                    <!-- Content -->
                    <div class="content">
                        <article class="post_item_single">
                            <div class="post_content">
                                <!-- Our Contacts -->
                                <div class="copypress-custom-bg-2">
                                    <div class="content_wrap sc_layouts_column_icons_position_left">
                                        <div class="empty_space height_9_4em"></div>
                                        <div id="sc_form_3" class="sc_form sc_form_detailed simple sc_align_default">
                                            <div class="trx_addons_columns_wrap">
                                                <div class="trx_addons_column-1_2">
                                                    <div class="sc_form_info">
                                                        <h2 class="sc_item_title sc_form_title sc_align_default sc_item_title_style_default">Our Contacts</h2>
                                                        <div class="sc_form_info_item sc_form_info_item_address">
                                                            <span class="sc_form_info_icon"></span>
                                                            <span class="sc_form_info_area">
                                                                <span class="sc_form_info_title">Our Office</span>
                                                                <span class="sc_form_info_data">
                                                                    <span>71 C3, Gullberg III, Block C3 Block C 3 Gulberg III, Lahore</span>
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <div class="sc_form_info_item sc_form_info_item_phone">
                                                            <span class="sc_form_info_icon"></span>
                                                            <span class="sc_form_info_area">
                                                                <span class="sc_form_info_title">Phone</span>
                                                                <span class="sc_form_info_data">
                                                                    <span>042-35872706
</span>
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <div class="sc_form_info_item sc_form_info_item_email">
                                                            <span class="sc_form_info_icon"></span>
                                                            <span class="sc_form_info_area">
                                                                <span class="sc_form_info_title">Email Address</span>
                                                                <span class="sc_form_info_data">
                                                                    <a href="mailto:example@yoursite.com">info@thecraftpackaging.com</a>
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div><div class="trx_addons_column-1_2">
                                                    
                                                    <form  method="post" action="{{url('contact-email')}}">
                                                        @csrf
                                                        <h2 class="sc_item_title sc_form_title sc_align_default sc_item_title_style_default">Contact</h2>
                                                        <label class="sc_form_field sc_form_field_name required">
                                                            <span class="sc_form_field_wrap">
                                                                <input type="text" name="name" value="" aria-required="true" placeholder="Your name">
                                                            </span>
                                                        </label>
                                                        <label class="sc_form_field sc_form_field_email required">
                                                            <span class="sc_form_field_wrap">
                                                                <input type="text" name="email" id="email" value="" aria-required="true" placeholder="Your e-mail">
                                                            </span>
                                                        </label>
                                                        <label class="sc_form_field sc_form_field_message required">
                                                            <span class="sc_form_field_wrap">
                                                                <textarea name="message" id="message" aria-required="true" placeholder="Your message"></textarea>
                                                            </span>
                                                        </label>
                                                        <div class="sc_form_field sc_form_field_button">
                                                            <button type="submit" class="sc_button_dark">Send Message</button>
                                                        </div>
                                                       
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="empty_space height_9_4em"></div>
                                    </div>
                                </div>
                                <!-- /Our Contacts -->
                                <!-- Google Map -->
                                <div class="map_copyweb">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3401.670911139624!2d74.3429859144833!3d31.505728281374466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39190445113f03cb%3A0x7d97f2b1ad7cff41!2s71%20C3%2C%20Gullberg%20III!5e0!3m2!1sen!2s!4v1622728671390!5m2!1sen!2s" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                                <!-- /Google Map -->
                            </div>
                        </article>
                    </div>
                    <!-- /Content -->
                </div>
                <!-- /Page content wrap -->

                @endsection