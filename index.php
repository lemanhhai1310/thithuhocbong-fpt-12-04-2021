<?php $data["title"] = "Trang chủ"; ?>
<?php $is_home = true; ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-section home__block04">
    <div class="uk-container uk-padding-remove">
        <div class="uk-box-shadow-medium uk-position-relative">
            <a href="" class="uk-position-top-center uk-box-shadow-small home__logo uk-position-z-index uk-border-rounded uk-overflow-hidden"><img src="images/logo1.png" alt=""></a>
            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="ratio: 1178:412;min-height: 568; max-height: 600;">

                <ul class="uk-slideshow-items">
                    <li>
                        <img src="images/Thithuhocbongonline-fptu-Huong-bannerbg.png" alt="" uk-cover>
                        <div class="uk-position-cover uk-flex uk-flex-middle uk-section">
                            <div class="uk-width-1-1 uk-padding">
                                <div class="" uk-grid>
                                    <div class="uk-width-1-6@m">

                                    </div>
                                    <div class="uk-width-3-5@m">
                                        <div class="home__block04__title uk-margin">
                                            Đăng ký <br class="uk-visible@m">
                                            <span class="uk-text-uppercase">thi thử học bổng</span> <br class="uk-visible@m">
                                            Đại học FPT 2021
                                        </div>
                                        <div>
                                            <div class="uk-display-inline-block home__block04__bg">
                                                <ul class="uk-list home__block04__list uk-list-bullet uk-margin-remove">
                                                    <li>Thi thử trực tuyến</li>
                                                    <li>Biết kết quả ngay</li>
                                                    <li>Nhận quà ngay sau khi hoàn thành thử thách</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>

                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

            </div>
            <div class="uk-padding-small uk-background-muted" uk-toggle="cls: home__block01; mode: media; media: @m">
                <div class="" uk-grid>
                    <div class="uk-width-expand">
                        <form class="uk-grid-small uk-grid-30-m home__block01__form uk-margin" uk-grid>
                            <div class="uk-width-1-2@s">
                                <div class="uk-form-stacked">
                                    <label class="uk-form-label home__block01__form__label" for="">Họ tên:*</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input home__block01__form__input" type="text" placeholder="Họ tên: *">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-1-2@s">
                                <div class="uk-form-stacked">
                                    <label class="uk-form-label home__block01__form__label" for="">Số điện thoại:*</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input home__block01__form__input" type="text" placeholder="Số điện thoại:*A">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-1-2@s">
                                <div class="uk-form-stacked">
                                    <label class="uk-form-label home__block01__form__label" for="">Email:*</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input home__block01__form__input" type="text" placeholder="Email:*">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-1-2@s">
                                <div class="uk-form-stacked">
                                    <label class="uk-form-label home__block01__form__label" for="">Link FB:</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input home__block01__form__input" type="text" placeholder="Link FB:">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-1-2@s">
                                <div class="uk-form-stacked">
                                    <label class="uk-form-label home__block01__form__label" for="">Trường THPT:</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input home__block01__form__input" type="text" placeholder="Trường THPT:">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-1-2@s">
                                <div class="uk-form-stacked">
                                    <label class="uk-form-label home__block01__form__label" for="">Tỉnh/Tp:*</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input home__block01__form__input" type="text" placeholder="Tỉnh/Tp:*">
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-1-2@s">
                                <div class="uk-form-stacked">
                                    <label class="uk-form-label home__block01__form__label" for="">Chọn cấp độ thi thử:</label>
                                    <div class="uk-form-controls">
                                        <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                            <select>
                                                <option value="">Please select...</option>
                                                <option value="1">Option 01</option>
                                                <option value="2">Option 02</option>
                                                <option value="3">Option 03</option>
                                                <option value="4">Option 04</option>
                                            </select>
                                            <button class="uk-width-1-1 home__block01__form__btnSelect uk-button uk-button-default uk-text-left uk-position-relative" type="button" tabindex="-1">
                                                <span></span>
                                                <span class="uk-position-center-right uk-position-small" uk-icon="icon: chevron-down"></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-1-1">
                                <div class="home__block01__form__txt">* Em hãy điền đầy đủ thông tin trên đây để nhận kết quả và quà tặng sau khi hoàn thành thử thách nhé</div>
                                <div class="home__block01__form__txt">* Những chỗ có dấu (*) là bắt buộc</div>
                            </div>
                            <div class="uk-width-1-1">
                                <button type="submit" class="uk-button home__block01__form__btn uk-button-secondary uk-button-large uk-border-rounded"><span>bấm để hoàn tất đăng ký và đăng nhập thi thử ngay</span></button>
                            </div>
                        </form>
                        <div class="uk-card uk-card-default uk-card-body uk-margin home__block02">
                            <div class="uk-text-center mb-20 mb-30-m">
                                <h4 class="uk-h4 uk-text-uppercase uk-margin-remove home__block01__title">bí kíp săn học bổng đại học fpt</h4>
                            </div>
                            <div uk-slider>

                                <div class="uk-position-relative">

                                    <div class="uk-slider-container">
                                        <ul class="uk-slider-items uk-child-width-1-1">
                                            <?php for ($i=0;$i<=4;$i++): ?>
                                            <li>
                                                <div class="uk-grid-small uk-grid-30-m" uk-grid>
                                                    <div class="uk-width-auto@m">
                                                        <div class="uk-text-center">
                                                            <div class="uk-cover-container uk-display-inline-block uk-border-circle">
                                                                <img src="images/lemanhhai_anhthe.jpg" alt="" uk-cover>
                                                                <canvas width="165" height="165"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="uk-width-expand">
                                                        <p class="home__block02__desc">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nisl tincidunt eget nullam non. Quis hendrerit dolor magna eget est lorem ipsum dolor sit. Volutpat odio facilisis mauris sit amet massa. Commodo odio aenean sed adipiscing diam donec adipiscing tristique. Mi eget mauris pharetra et. ”</p>
                                                        <div>
                                                            <div class="home__block02__txt1">Trần Lê Lâm Anh</div>
                                                            <div class="home__block02__txt2">K11 ngành Quản trị kinh doanh</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <?php endfor; ?>
                                        </ul>
                                    </div>

                                    <div class="uk-hidden@s uk-light">
                                        <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                                        <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                                    </div>

                                    <div class="uk-visible@s">
                                        <a class="uk-position-center-left-out uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                                        <a class="uk-position-center-right-out uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                                    </div>

                                </div>

                                <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-4@m">
                        <div class="uk-margin">
                            <div class="uk-text-center mb-20 mb-30-m">
                                <h4 class="uk-h4 uk-text-uppercase uk-margin-remove home__block01__title">KẾT NỐI NGAY VỚI GROUP SĂN HỌC BỔNG ĐẠI HỌC FPT 2021</h4>
                            </div>
                            <div id="fb-root"></div>
                            <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v10.0" nonce="iIolEFa6"></script>
                            <div class="fb-group" data-href="https://www.facebook.com/groups/2415949645289054/" data-width="" data-show-social-context="true" data-show-metadata="false"><blockquote cite="https://www.facebook.com/groups/2415949645289054/" class="fb-xfbml-parse-ignore">Cùng SĂN HỌC BỔNG ĐẠI HỌC FPT</blockquote></div>
                        </div>
                        <div class="uk-margin">
                            <div class="mb-10 mb-10-m">
                                <h4 class="uk-h4 uk-text-uppercase uk-margin-remove home__block01__title">XẾP HẠNG KẾT QUẢ THI THỬ TUẦN</h4>
                            </div>
                            <div class="uk-grid-5" uk-grid>
                                <?php
                                $data = array(
                                    array(
                                        'src' => 'images/Bang-xep-hang-icon/Thithuhocbongonline-fptu-Huong-11.svg',
                                        'name' => 'Nguyễn Văn Hoàng',
                                        'rate' => '90',
                                    ),
                                    array(
                                        'src' => 'images/Bang-xep-hang-icon/Thithuhocbongonline-fptu-Huong-12.svg',
                                        'name' => 'Đào Duy Khánh',
                                        'rate' => '89',
                                    ),
                                    array(
                                        'src' => 'images/Bang-xep-hang-icon/Thithuhocbongonline-fptu-Huong-13.svg',
                                        'name' => 'Lò Ngọc Duy',
                                        'rate' => '75',
                                    ),
                                    array(
                                        'name' => 'Nguyen Hung Cuong',
                                        'rate' => '60',
                                    ),
                                    array(
                                        'name' => 'Trịnh Hoàng Khánh',
                                        'rate' => '59',
                                    ),
                                    array(
                                        'name' => 'Nguyen Ngoc Phuc',
                                        'rate' => '55',
                                    ),
                                );
                                foreach ($data as $k => $v): ?>
                                <div class="uk-width-1-1 home__block03__item">
                                    <div class="uk-flex-middle uk-grid-5" uk-grid>
                                        <div class="uk-width-auto">
                                            <div class="home__block03__boximg">
                                                <?php if ($k<=2): ?>
                                                    <img class="uk-responsive-width" src="<?= $v['src'] ?>" alt="">
                                                <?php else: ?>
                                                    <span class="uk-badge home__block03__badge"><?= $k+1 ?></span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="uk-width-expand">
                                            <span class="home__block03__txt"><?= $v['name'] ?></span>
                                        </div>
                                        <div class="uk-width-auto">
                                            <div class="uk-label home__block03__label">
                                                <?= $v['rate'] ?>/90
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>