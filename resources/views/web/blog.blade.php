@extends('web/master')
@section('tcp')

<div class="breadcrumbs_container sc_layouts_row sc_layouts_row_type_normal sc_layouts_hide_on_frontpage scheme_dark">
                        <div class="sc_layouts_column sc_layouts_column_align_center sc_layouts_column_icons_position_left">
                            <div class="sc_content sc_content_default">
                                <div class="sc_content_container">
                                    <div class="sc_layouts_item">
                                        <div class="sc_layouts_title">
                                            <div class="sc_layouts_title_title">
                                                <h2 class="sc_layouts_title_caption">All Posts</h2>
                                            </div>
                                            <div class="sc_layouts_title_breadcrumbs">
                                                <div class="breadcrumbs">
                                                    <a class="breadcrumbs_item home" href="index.html">Home</a>
                                                    <span class="breadcrumbs_delimiter"></span>
                                                    <span class="breadcrumbs_item current">All Posts</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Breadcrumbs -->
         



<div class="page_content_wrap scheme_default">
                    <div class="content_wrap">
                        <!-- Content -->
                        <div class="content">
                            <div class="posts_container">
                                <!-- Post item -->
                                <article class="post_item post_layout_excerpt">
                                    <div class="post_featured with_thumb hover_icon scheme_dark">
                                        <img src="{{url('images/img36.jpg')}}" alt="" />
                                        <div class="mask"></div>
                                        <div class="icons">
                                            <a href="#" aria-hidden="true" class="icon-eye-1"></a>
                                        </div>
                                    </div>
                                    <div class="post_header">
                                        <h2 class="post_title">
                                            <a href="#">Catalogs: the Best Way to Present Product Information</a>
                                        </h2>
                                        <div class="post_meta">
                                            <span class="post_meta_item post_categories">
                                                <a href="#" rel="category tag">Lifestyle</a>
                                            </span>
                                            <span class="post_meta_item post_date">
                                                <a href="#">05.12.2016</a>
                                            </span>
                                            <a href="#" class="post_meta_item post_counters_item post_counters_comments trx_addons_icon-comment">
                                                <span class="post_counters_number">3</span>
                                                <span class="post_counters_label">Comments</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="post_content">
                                        <div class="post_content_inner">
                                            <p>Quuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quiaolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Minim veniam, quis nostrud exercitation ullamco laboris nisi&hellip;</p>
                                        </div>
                                        <p>
                                            <a class="more-link sc_button_pink" href="#">Read more</a>
                                        </p>
                                    </div>
                                </article>
                     
                            </div>
                       
                        </div>
                        <!-- /Content -->
                        <!-- Sidebar -->
                        <div class="sidebar right widget_area scheme_side">
                            <div class="sidebar_inner">
                                <!-- Widget: Categories -->
                                <!-- /Widget: Categories --><!-- Widget: Search --><aside class="widget widget_search">
                                <h5 class="widget_title">Search</h5>
                                <form role="search" method="get" class="search-form" action="#">
                                    <label>
                                        <span class="screen-reader-text">Search for:</span>
                                        <input type="search" class="search-field" placeholder="Search &hellip;" value="" name="s" />
                                    </label>
                                    <input type="submit" class="search-submit" value="Search" />
                                </form>
                            </aside><!-- /Widget: Search --><!-- Widget: Recent comments --> <!-- /Widget: Recent comments --><!-- Widget: Calendar --><aside class="widget widget_calendar">
                                <h5 class="widget_title">Calendar</h5>
                                <div id="calendar_wrap" class="calendar_wrap">
                                    <table id="tpl-calendar">
                                        <caption>March 2017</caption>
                                        <thead>
                                            <tr>
                                                <th scope="col" title="Monday">M</th>
                                                <th scope="col" title="Tuesday">T</th>
                                                <th scope="col" title="Wednesday">W</th>
                                                <th scope="col" title="Thursday">T</th>
                                                <th scope="col" title="Friday">F</th>
                                                <th scope="col" title="Saturday">S</th>
                                                <th scope="col" title="Sunday">S</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td colspan="2" class="pad">&nbsp;</td>
                                                <td>1</td>
                                                <td>2</td>
                                                <td>3</td>
                                                <td>4</td>
                                                <td>5</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>7</td>
                                                <td>8</td>
                                                <td>9</td>
                                                <td>10</td>
                                                <td>11</td>
                                                <td>12</td>
                                            </tr>
                                            <tr>
                                                <td>13</td>
                                                <td>14</td>
                                                <td>15</td>
                                                <td>16</td>
                                                <td>17</td>
                                                <td>18</td>
                                                <td>19</td>
                                            </tr>
                                            <tr>
                                                <td id="today">20</td>
                                                <td>21</td>
                                                <td>22</td>
                                                <td>23</td>
                                                <td>24</td>
                                                <td>25</td>
                                                <td>26</td>
                                            </tr>
                                            <tr>
                                                <td>27</td>
                                                <td>28</td>
                                                <td>29</td>
                                                <td>30</td>
                                                <td>31</td>
                                                <td class="pad" colspan="2">&nbsp;</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="3" id="prev">
                                                    <a href="#">&laquo; Feb</a>
                                                </td>
                                                <td class="pad">&nbsp;</td>
                                                <td colspan="3" id="next">
                                                    <a href="#">Apr &raquo;</a>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </aside><!-- /Widget: Calendar --><!-- Widget: Recent Posts --><aside class="widget widget_recent_entries">
                                <h5 class="widget_title">Recent Posts</h5>
                                <ul>
                                    <li>
                                        <a href="post-single.html">Catalogs: the Best Way to Present Product Information</a>
                                    </li>
                                    <li>
                                        <a href="post-single.html">10 Ingenious Newspaper Designs</a>
                                    </li>
                                    <li>
                                        <a href="post-single.html">5 Great Magazines to Give for Christmas</a>
                                    </li>
                                </ul>
                            </aside><!-- /Widget: Recent Posts --><!-- Widget: Tag Cloud --><aside class="widget widget_tag_cloud">
                                <h5 class="widget_title">Tags</h5>
                                <div class="tagcloud">
                                    <a href="#" title="8 topics">booklets</a>
                                    <a href="#" title="5 topics">branding</a>
                                    <a href="#" title="5 topics">business</a>
                                    <a href="#" title="8 topics">business cards</a>
                                    <a href="#" title="8 topics">magazines</a>
                                    <a href="#" title="8 topics">posters</a>
                                    <a href="#" title="9 topics">seo</a>
                                    <a href="#" title="9 topics">team</a>
                                </div>
                            </aside><!-- /Widget: Tag Cloud --><!-- Widget: Meta --><aside class="widget widget_meta">
                                <h5 class="widget_title">Meta</h5>
                                <ul>
                                    <li>
                                        <a href="#">Log in</a>
                                    </li>
                                    <li>
                                        <a href="#">Entries <abbr title="Really Simple Syndication">RSS</abbr></a>
                                    </li>
                                    <li>
                                        <a href="#">Comments <abbr title="Really Simple Syndication">RSS</abbr></a>
                                    </li>
                                    <li>
                                        <a href="#" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress.org</a>
                                    </li>
                                </ul>
                            </aside>
                                <!-- /Widget: Meta -->
                            </div>
                        </div>
                        <!-- /Sidebar -->
                    </div>
                </div>
                <!-- /Page content wrap -->
                @endsection