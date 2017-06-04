<div class="container">

    <div id="contact-wrapper">

        <div class="row intro">

            <div class="container">
                <p>
                    Do you have questions or feedback for Data.gov? Please let us know how to serve you best.
                </p>
            </div>

        </div>

        <div class="row contact-nav">

            <ul class="nav">
                <li class="col-md-4">
                    <a href="#question">
                        <i class="fa fa-comments-o"></i>
                        <span>Ask a question</span>
                    </a>
                </li>

                <li class="col-md-4">
                    <a href="#request">
                        <i class="fa fa-lightbulb-o"></i>
                        <span>Make a Request</span>
                    </a>
                </li>

                <li class="col-md-4">
                    <a href="#report">
                        <i class="fa fa-exclamation-circle"></i>
                        <span>Report a Problem</span>
                    </a>
                </li>
            </ul>

        </div>


        <div class="row">

            <section class="col-md-8">
                <h1 class="icon-heading">
                    <i class="fa fa-stack-exchange"></i>
                    <span>
                        Open Data Stack Exchange
                    </span>
                </h1>


                <div class="section-intro row">
                    <div class="col-md-6">
                        <a class=" block-link"
                           href="https://opendata.stackexchange.com/questions/ask?tags=data.gov"> Ask the community </a>
                    </div>
                    <div class="col-md-6">
                        <a class=" block-link"
                           href="https://opendata.stackexchange.com/questions/tagged/data.gov"> See all Data.gov
                            questions </a>
                    </div>
                </div>


                <?php
                $feed = fetch_feed('http://opendata.stackexchange.com/feeds/tag/data.gov'); // specify feed url
                $items = $feed->get_items(0, 7); // specify first and last item

                if (!empty($items)) :
                    foreach ($items as $item) : ?>
                        <div class="foreign-post">
                            <h4 class="post-title">
                                <a href="<?php echo $item->get_link(); ?>"><?php echo $item->get_title(); ?></a>
                            </h4>

                            <div class="post-date">
                                <?php echo $item->get_date('F d, Y h:i A'); ?>
                            </div>
                        </div>

                    <?php endforeach; ?>

                <?php endif; ?>


            </section>


            <section class="col-md-4">
                <div>
                    <h1 class="icon-heading">
                        <i class="fa fa-twitter"></i>
                        <span>Twitter</span>
                    </h1>

                    <div class="section-intro row">
                        <div class="col-md-12">
                            <a class=" tooltips block-link" href="https://twitter.com/usdatagov">Ask us at
                                @usdatagov</a>
                        </div>
                    </div>

                    <div class="twitter-feed">
                        <?php echo do_shortcode('[twitter-widget username="usdatagov" items="2" hidereplies="false" showintents="false" showretweets="true"]') ?>
                    </div>
                </div>
            </section>
        </div>


        <section class="row">
            <div class="col-md-12">
                <a name="question" class="contact-heading">
                    <h1 class="icon-heading">
                        <i class="fa fa-comments-o"></i>
                        <span>
                            Ask a Question
                        </span>
                    </h1>
                </a>

                <div>
                    <div>
                        You can use this form to contact the data.gov team or feel free to email us directly at
                        <a href='mailto:datagov@gsa.gov'>datagov@gsa.gov</a>
                    </div>
                    <div id="contact-us-form">
                        <?php
                        while (have_posts()) {
                            the_post();
                            the_content();
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>

        <section class="row">
            <div class="col-md-12">
                <a name="request" class="contact-heading">
                    <h1 class="icon-heading">
                        <i class="fa fa-lightbulb-o"></i>
                        <span>
                            Make a Request
                        </span>
                    </h1>
                </a>
            </div>

            <ul class="nav contact-link">

                <li class="col-md-6">
                    <a href="https://github.com/GSA/data.gov/#submitting-an-issue">
                        <i class="fa fa-github"></i>
                        <span>
                            Suggest new Data.gov features
                        </span>
                    </a>
                </li>

                <li class="col-md-6">
                    <a href="/request">
                        <i class="fa fa-check-circle-o"></i>
                        <span>
                            Request new data
                        </span>
                    </a>
                </li>

            </ul>


        </section>

        <section class="row">

            <div class="col-md-12">
                <a name="report" class="contact-heading">
                    <h1 class="icon-heading">
                        <i class="fa fa-exclamation-circle"></i>
                            <span>
                                Report a Problem
                            </span>
                    </h1>
                </a>
            </div>

            <ul class="nav contact-link">
                <li class="col-md-6">
                    <a href="https://github.com/GSA/data.gov/blob/master/CONTRIBUTING.md#ways-to-contribute">
                        <i class="fa fa-github"></i>
                            <span>
                                Report a problem with the website
                            </span>
                    </a>
                </li>
                <li class="col-md-6">
                    <a href="/issue">
                        <i class="fa fa-exclamation-circle"></i>
                            <span>
                                Report a problem with a dataset
                            </span>
                    </a>
                </li>
            </ul>

        </section>
    </div>
</div>
