<!DOCTYPE html>
<html lang="en">
<head>
    
    <?php $this->load->view("frontend/meta_links"); ?>

    <link href="<?php echo WEBSITE_URL; ?>assets/css/theme-static.css" rel="stylesheet" />

    <?php $this->load->view("frontend/header"); ?>

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "What kind of market research reports and studies does Persistence Market Research offer?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Persistence Market Research offers a wide range of syndicated (off-the-shelf), custom market research reports as well as undertakes consulting assignments precisely tailored to the client's needs. We also maintain an extensive repository of upcoming as well as ongoing reports, set for publication at definite time intervals. Should the client require expedited delivery, we can prioritize our resources and accelerate these studies to meet your timelines. Please coordinate with our business development team to know more about the delivery timelines for syndicate & custom reports, and consulting services."
                }
            },
            {
                "@type": "Question",
                "name": "How long have you been in the market?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Persistence Market Research has been in the market research and consulting business since 2012. Our company has delivered over 10,000+ published & custom reports and consulting assignments to over 3,500+ clients to date. More than 60% of our clients are Fortune 1,000 companies with over 75%+ retention rates. Persistence Market Research has been a trusted research partner for various multinationals, government institutions, SMEs, capital markets, investors, research organizations, business consulting firms, media houses, academia, and startups."
                }
            },
            {
                "@type": "Question",
                "name": "How to search for a report title in your database?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Finding the perfect market research report is easy with Persistence Market Research's intuitive search tool at www.persistencemarketresearch.com. Simply enter the report title, and relevant suggestions will appear instantly. You can choose from these suggestions or hit enter to explore a comprehensive list of reports. If you need help finding the ideal report for your business, our dedicated business development team is available 24/5 at sales@persistencemarketresearch.com. Contact: U.S. +1 646-878-6329, U.K. +44 203-837-5656, APAC +91 90677 93500"
                }
            },
            {
                "@type": "Question",
                "name": "Can I get a report preview or sample page before making a purchase decision?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, at Persistence Market Research, we empower your decision-making with full transparency. We provide a free report sample for your review, ensuring confidence in your purchase. Our expert in-house team is also available for pre-sales consultations, addressing your queries and guiding you in selecting the best solution to cater to your business needs. For added assurance, we also offer demos of previous report editions, if available, during secure online meetings, safeguarding the confidentiality of our work."
                }
            },
            {
                "@type": "Question",
                "name": "How are your reports priced?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Persistence Market Research delivers high-quality market research at competitive prices. Report pricing reflects the complexity of the project, the expertise of our consultants, primary interview and survey costs, and secondary research efforts. Pricing: Excel Only ($2,750), Single user ($4,995), Multi-user ($7,295), Corporate ($8,495). Custom projects are priced uniquely based on client requirements."
                }
            },
            {
                "@type": "Question",
                "name": "How do I order a report?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Ordering from Persistence Market Research is straightforward and secure. You can connect with our business development team to track deliverables. For multiple research reports, reach out to our business development representatives to get a bundle discount offer, as applicable."
                }
            },
            {
                "@type": "Question",
                "name": "What formats are your reports available in, and can they be shipped?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Our reports are delivered in PDF and PPT formats (editable PPTs are exclusive to corporate licenses), accompanied by an Excel spreadsheet containing all the market estimates and forecasts. While electronic delivery is preferred by most clients, we can also ship hard copies upon request. Shipping charges vary by location and are added to the invoice."
                }
            },
            {
                "@type": "Question",
                "name": "Instead of the full report, can I buy a specific section of the report?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, while we recommend purchasing the full report for comprehensive insights, we are flexible to accommodate specific needs, including regional/country summaries. Post feasibility, without compromising accuracy, we can offer selected report sections. Our business development and research consultants will collaborate with you to identify the most effective scope and pricing for your unique requirements."
                }
            },
            {
                "@type": "Question",
                "name": "What are the delivery timelines of your studies/reports?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We usually share the deliverables within 3-5 business days for published reports, ensuring that the latest version is delivered to clients. For ongoing or upcoming reports, we provide an estimated delivery timeline based on project complexity. During pre-sales discussions, our business development representatives will share tentative delivery timelines and commercials after finalizing the scope and deliverables."
                }
            },
            {
                "@type": "Question",
                "name": "What are Persistence Market Research's payment terms?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "As per our company policy, we prefer advance receipt of payments. Due to the specialized nature of our services, we do not offer refunds once a report has been delivered. However, we are fully committed to addressing any concerns promptly and fairly. If dissatisfied, we will work diligently to address feedback and offer revisions or amendments as needed."
                }
            }
        ]
    }
    </script>

    <style>
        strong{font-weight: 600;}
        .faq-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            line-height: 1.6;
        }
        .faq-title {
            color: #2c3e50;
            /* border-bottom: 3px solid #3498db; */
            padding-bottom: 10px;
            /* margin-bottom: 30px; */
            font-size: 1.4rem;
        }
        .faq-item {
            margin-bottom: 25px;
            border: 1px solid #e1e8ed;
            border-radius: 8px;
            background: #fff;
        }
        .faq-question {
            background: #f8f9fa;
            padding: 15px 20px;
            margin: 0;
            font-weight: 600;
            font-size: 1.1rem;
            color: #2c3e50;
            cursor: pointer;
            border-radius: 8px 8px 0 0;
            position: relative;
        }
        .faq-question:after {
            content: '+';
            position: absolute;
            right: 20px;
            font-size: 1.5rem;
            color: #3498db;
        }
        .faq-question.active:after {
            content: '−';
        }
        .faq-answer {
            padding: 20px;
            display: none;
            color: #555;
            border-top: 1px solid #e1e8ed;
        }
        .faq-answer.active {
            display: block;
        }
        .contact-info {
            background: #e8f4f8;
            padding: 10px;
            border-radius: 5px;
            margin-top: 10px;
        }
        .pricing-table {
            overflow-x: auto;
            margin: 15px 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 10px 0;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px 12px;
            text-align: left;
        }
        th {
            background-color: #f8f9fa;
            font-weight: bold;
        }
         .order-steps {
            margin: 20px 0;
        }
        .step {
            display: flex;
            align-items: flex-start;
            margin-bottom: 20px;
            padding: 15px;
            background: #f8f9fa;
            border-radius: 8px;
            border-left: 4px solid #3498db;
        }
        .step-number {
            background: #3498db;
            color: white;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            margin-right: 15px;
            flex-shrink: 0;
        }
        .step-content h4 {
            margin: 0 0 5px 0;
            color: #2c3e50;
            font-size: 1.1rem;
        }
        .step-content p {
            margin: 0;
            color: #555;
        }
    </style>

    <main role="main">
        <div class="breadCrumb-Section">
            <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb bg-transparent p-0 my-0">
                                <li class="breadcrumb-item">
                                    <a href="<?php echo WEBSITE_URL; ?>" class="text-black" title="Persistence Market Report">
                                        <span>Home</span>
                                    </a>
                                </li>
                                <li class="breadcrumb-item" class="text-black" aria-current="page">
                                    <span>FAQ</span>
                                </li>
                            </ol>
                        </nav>
                    </div>
            </div>
        </div>
        </div>
        <section class="staticBanner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12 text-center">
                        <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-chat-quote mb-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z" />
                            <path d="M7.468 7.667c0 .92-.776 1.666-1.734 1.666S4 8.587 4 7.667C4 6.747 4.776 6 5.734 6s1.734.746 1.734 1.667z" />
                            <path fill-rule="evenodd" d="M6.157 6.936a.438.438 0 0 1-.56.293.413.413 0 0 1-.274-.527c.08-.23.23-.44.477-.546a.891.891 0 0 1 .698.014c.387.16.72.545.923.997.428.948.393 2.377-.942 3.706a.446.446 0 0 1-.612.01.405.405 0 0 1-.011-.59c1.093-1.087 1.058-2.158.77-2.794-.152-.336-.354-.514-.47-.563zm-.035-.012h-.001.001z" />
                            <path d="M11.803 7.667c0 .92-.776 1.666-1.734 1.666-.957 0-1.734-.746-1.734-1.666 0-.92.777-1.667 1.734-1.667.958 0 1.734.746 1.734 1.667z" />
                            <path fill-rule="evenodd" d="M10.492 6.936a.438.438 0 0 1-.56.293.413.413 0 0 1-.274-.527c.08-.23.23-.44.477-.546a.891.891 0 0 1 .698.014c.387.16.72.545.924.997.428.948.392 2.377-.942 3.706a.446.446 0 0 1-.613.01.405.405 0 0 1-.011-.59c1.093-1.087 1.058-2.158.77-2.794-.152-.336-.354-.514-.469-.563zm-.034-.012h-.002.002z" />
                        </svg>
                        <h1 class="mb-4 secHeading">Frequently Asked Questions</h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="bgGrey pressReleaseList">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                            <div class="faq-container bg-white p-3">
                                <h2 class="faq-title">Customer FAQs</h2>
                                
                                <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                    <div class="faq-question" itemprop="name" onclick="toggleFAQ(this)">
                                        What kind of market research reports and studies does Persistence Market Research offer?
                                    </div>
                                    <div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <p>Persistence Market Research offers a wide range of <strong>syndicated (off-the-shelf), custom market research reports as well as undertakes consulting assignments</strong> precisely tailored to the client's needs.</p>
                                            <p>We also maintain an extensive repository of upcoming as well as ongoing reports, set for publication at definite time intervals. Should the client require expedited delivery, we can prioritize our resources and accelerate these studies to meet your timelines.</p>
                                            <p>Please coordinate with our business development team to know more about the delivery timelines for syndicate & custom reports, and consulting services.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                    <div class="faq-question" itemprop="name" onclick="toggleFAQ(this)">
                                        How long have you been in the market?
                                    </div>
                                    <div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <p>Persistence Market Research has been in the market research and consulting business since <strong>2012</strong>. Our company has delivered over <strong>10,000+ published & custom reports</strong> and consulting assignments to over <strong>3,500+ clients</strong> to date. More than <strong>60% of our clients are Fortune 1,000 companies</strong> with over <strong>75%+ retention rates</strong>.</p>
                                            <p>Persistence Market Research has been a trusted research partner for various multinationals, government institutions, SMEs, capital markets, investors, research organizations, business consulting firms, media houses, academia, and startups.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                    <div class="faq-question" itemprop="name" onclick="toggleFAQ(this)">
                                        How to search for a report title in your database?
                                    </div>
                                    <div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <p>Finding the perfect market research report is easy with Persistence Market Research's intuitive search tool at <strong>www.persistencemarketresearch.com</strong>. Simply enter the report title, and relevant suggestions will appear instantly. You can choose from these suggestions or hit enter to explore a comprehensive list of reports.</p>
                                            <p>If you need help finding the ideal report for your business, our dedicated business development team is available <strong>24/5</strong> at <a href="mailto:sales@persistencemarketresearch.com">sales@persistencemarketresearch.com</a>.</p>
                                            <div class="contact-info">
                                                <p><strong>Contact Information:</strong></p>
                                                <p>U.S. Contact: <a href="tel:+16468786329">+1 646-878-6329</a><br>
                                                U.K. Contact: <a href="tel:+442038375656">+44 203-837-5656</a><br>
                                                APAC Contact: <a href="tel:+919067793500">+91 90677 93500</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                    <h2 class="faq-question" itemprop="name" onclick="toggleFAQ(this)">
                                        Can I get a report preview or sample page before making a purchase decision?
                                    </h2>
                                    <div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <p><strong>Yes</strong>, at Persistence Market Research, we empower your decision-making with full transparency. We provide a <strong>free report sample</strong> for your review, ensuring confidence in your purchase. Our expert in-house team is also available for pre-sales consultations, addressing your queries and guiding you in selecting the best solution to cater to your business needs.</p>
                                            <p>For added assurance, we also offer <strong>demos of previous report editions</strong>, if available, during secure online meetings, safeguarding the confidentiality of our work.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                    <h2 class="faq-question" itemprop="name" onclick="toggleFAQ(this)">
                                        How are your reports priced?
                                    </h2>
                                    <div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <p>Persistence Market Research delivers high-quality market research at competitive prices. Report pricing reflects the complexity of the project, the expertise of our consultants, primary interview and survey costs, and secondary research efforts.</p>
                                            <p>Unless specified, prices listed on our website apply to <strong>global studies</strong>:</p>
                                            <div class="pricing-table">
                                                <table>
                                                    <thead>
                                                        <tr>
                                                            <th>License Type</th>
                                                            <th>Report Price</th>
                                                            <th>User Access</th>
                                                            <th>Report Format</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Excel Only</td>
                                                            <td>US$ 2,750</td>
                                                            <td>Single user</td>
                                                            <td>Excel Only</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Single user</td>
                                                            <td>US$ 4,995</td>
                                                            <td>Single user</td>
                                                            <td>PDF + Excel</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Multi-user</td>
                                                            <td>US$ 7,295</td>
                                                            <td>Up to 5 users</td>
                                                            <td>PDF + Excel</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Corporate</td>
                                                            <td>US$ 8,495</td>
                                                            <td>Unlimited users</td>
                                                            <td>PDF, Excel, PPT</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <p><strong>Custom projects</strong> are priced uniquely, based on the client's ad-hoc scope and business requirements.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                    <h2 class="faq-question" itemprop="name" onclick="toggleFAQ(this)">
                                        How do I order a report?
                                    </h2>
                                    <div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <p>Ordering from Persistence Market Research is <strong>straightforward and secure</strong>. Follow these simple steps:</p>
                                            
                                            <div class="order-steps">
                                                <div class="step">
                                                    <div class="step-number">1</div>
                                                    <div class="step-content">
                                                        <h4>Your Report Page</h4>
                                                        <p>Browse our report you wish to buy on our website and find your desired market research report. Review the report details, table of contents, and pricing options.</p>
                                                    </div>
                                                </div>
                                                
                                                <div class="step">
                                                    <div class="step-number">2</div>
                                                    <div class="step-content">
                                                        <h4>'Buy Now' Button</h4>
                                                        <p>Click the "Buy Now" button and select your preferred license type (Single User, Multi-User, or Corporate). Add the report to your cart.</p>
                                                    </div>
                                                </div>
                                                
                                                <div class="step">
                                                    <div class="step-number">3</div>
                                                    <div class="step-content">
                                                        <h4>Checkout</h4>
                                                        <p>Complete the secure checkout process by providing your billing information and selecting your payment method (credit card, wire transfer, or purchase order).</p>
                                                    </div>
                                                </div>
                                                
                                                <div class="step">
                                                    <div class="step-number">4</div>
                                                    <div class="step-content">
                                                        <h4>Payment Confirmation</h4>
                                                        <p>Receive immediate payment confirmation via email with your order details and estimated delivery timeline.</p>
                                                    </div>
                                                </div>
                                                
                                                <div class="step">
                                                    <div class="step-number">5</div>
                                                    <div class="step-content">
                                                        <h4>Delivery</h4>
                                                        <p>Our dispatch team will share the latest version of the report on your registered email within 3-5 business days.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <p>If you need help finding the ideal report for your business, our dedicated business development team is available <strong>24/5</strong> at <a href="mailto:sales@persistencemarketresearch.com">sales@persistencemarketresearch.com</a>.</p>
                                            <div class="contact-info">
                                                <p><strong>Contact Information:</strong></p>
                                                <p>U.S. Contact: <a href="tel:+16468786329">+1 646-878-6329</a><br>
                                                U.K. Contact: <a href="tel:+442038375656">+44 203-837-5656</a><br>
                                                APAC Contact: <a href="tel:+919067793500">+91 90677 93500</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                    <h2 class="faq-question" itemprop="name" onclick="toggleFAQ(this)">
                                        What formats are your reports available in, and can they be shipped?
                                    </h2>
                                    <div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <p>Our reports are delivered in <strong>PDF and PPT formats</strong> (editable PPTs are exclusive to corporate licenses), accompanied by an <strong>Excel spreadsheet</strong> containing all the market estimates and forecasts (regions/countries/segments).</p>
                                            <p>While <strong>electronic delivery</strong> is preferred by most of our clients, we can also ship <strong>hard copies</strong> upon request. Shipping charges vary by location and are added to the invoice, with full details provided by our business development team.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                    <h2 class="faq-question" itemprop="name" onclick="toggleFAQ(this)">
                                        Instead of the full report, can I buy a specific section of the report?
                                    </h2>
                                    <div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <p><strong>Yes</strong>, while we recommend a purchase of the <strong>full report</strong> as it provides comprehensive insights into interconnected markets, we are flexible to accommodate your specific needs, including <strong>regional/country summaries</strong>.</p>
                                            <p>Post feasibility, without compromising accuracy, we can offer <strong>selected report sections</strong>. Our business development and research consultants will collaborate with you to identify the most effective scope and pricing for your unique requirements.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                    <h2 class="faq-question" itemprop="name" onclick="toggleFAQ(this)">
                                        What are the delivery timelines of your studies/reports?
                                    </h2>
                                    <div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <p>We usually share the deliverables within <strong>3-5 business days</strong> for the published reports, ensuring that the latest version of the report is delivered to the clients.</p>
                                            <p>For ongoing or upcoming reports, we provide an estimated delivery timeline based on the complexity of the project. During pre-sales discussions, our business development representatives will share the tentative delivery timelines and commercials for the custom study after finalizing the scope of the study and list of deliverables.</p>
                                            <p>They will also facilitate the payment process for you via multiple payment options, including <strong>credit card or wire transfer</strong>.</p>
                                            <p>We also accept <strong>purchase orders</strong> if all necessary vendor registration details are included. Upon advance receipt of payment, the report will be sent to you on the agreed-upon date, as per our company policies.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                    <h2 class="faq-question" itemprop="name" onclick="toggleFAQ(this)">
                                        What are Persistence Market Research's payment terms?
                                    </h2>
                                    <div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <p>As per our company policy, we prefer <strong>advance receipt of payments</strong>. Due to the specialized nature of our services, we <strong>do not offer refunds</strong> once a report has been delivered. This is our standard company policy. As our services are based on the concept of knowledge and information sharing, refunds cannot be issued after the client has reviewed the study.</p>
                                            <p>However, we are fully committed to addressing any concerns promptly and fairly. If you are dissatisfied, we will work diligently to address your feedback and offer <strong>revisions or amendments</strong> as needed. While we strive to exceed your expectations, please note that customizations beyond the agreed-upon scope may incur additional charges, which our team will discuss with you in detail.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <script>
                                function toggleFAQ(element) {
                                    const answer = element.nextElementSibling;
                                    const isActive = answer.classList.contains('active');
                                    
                                    // Close all other FAQs
                                    document.querySelectorAll('.faq-answer.active').forEach(item => {
                                        item.classList.remove('active');
                                    });
                                    document.querySelectorAll('.faq-question.active').forEach(item => {
                                        item.classList.remove('active');
                                    });
                                    
                                    // Toggle current FAQ
                                    if (!isActive) {
                                        answer.classList.add('active');
                                        element.classList.add('active');
                                    }
                                }
                                
                                // Open first FAQ by default
                                document.addEventListener('DOMContentLoaded', function() {
                                    const firstQuestion = document.querySelector('.faq-question');
                                    const firstAnswer = document.querySelector('.faq-answer');
                                    firstQuestion.classList.add('active');
                                    firstAnswer.classList.add('active');
                                });
                            </script>
                    </div>
                    <div class="col-md-4">
                        <div class="bg-white p-4 text-center">
                            <p class="lead">Media Contact</p>
                            <p>Please drop a mail to the Global PR Team for your queries</p>
                            <div class="mt-4">
                                <a class="btn btnOutline" style="background-color:#282C7D;color:#fff;border-radius:5px;" href="<?php echo WEBSITE_URL; ?>contact-us.asp" title="Contact Us">
                                    Contact Us
                                </a>
                            </div>
                        </div>
                        <div class="bg-white mt-5 resReportList">
                            <p class="secHeading text-center">
                                Research Reports
                            </p>
                            <ul class="list-unstyled">
                            	<?php
                            	if(!empty($latest_reports)){
                            		foreach($latest_reports as $latest_report){
	                            	?>
	                                <li>
	                                    <h2>
	                                        <a href="<?php echo WEBSITE_URL."market-research/".$latest_report['rep_url'].".asp"; ?>" title="<?php echo $latest_report['rep_name']; ?>">
	                                            <?php echo $latest_report['rep_name']; ?>
	                                        </a>
	                                    </h2>
	                                </li>
	                                <?php
	                            	}
	                            }
	                            ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
    <?php $this->load->view("frontend/footer"); ?>

    <link href="<?php echo WEBSITE_URL; ?>assets/css/media.css" rel="stylesheet" />

</body>
</html>