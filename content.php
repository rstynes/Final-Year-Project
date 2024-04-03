<?php
$homepageContentH2 = <<<HTML
Welcome to PhishGuardian
HTML;
$homepageContentP1 = <<<HTML
PhishGuardian is your trusted resource for learning about phishing scams and staying safe online. Whether you're new to the internet or looking to enhance your cybersecurity knowledge, we're here to help.
HTML;
$homepageContentP2 = <<<HTML
Phishing is a deceptive technique used by cybercriminals to trick individuals into revealing sensitive information such as passwords, credit card numbers, or personal details. To learn more about different types of phishing scams, navigate to the Phishing section in the navigation bar above.
HTML;
$homepageContentHead = <<<HTML
Explore Our Sections:
HTML;
$homepageContentList = <<<HTML
Phishing Section: Discover the various types of phishing scams and how to identify them.
Quiz: Test your knowledge with our interactive quiz on phishing awareness.
Profile: Manage your account settings and personalize your PhishGuardian experience.
About: Learn more about PhishGuardian, our mission, and how we strive to empower users like you.
HTML;
$homepageContentHead2 = <<<HTML
Start Your Learning Today!
HTML;
$homepageContentP3 = <<<HTML
Begin your journey towards a safer online experience by exploring the sections above. If you have any questions or concerns, feel free to reach out to us.
HTML;


$phishContent = <<<HTML
<h2>What is Phishing and Why is it Important to Be Aware?</h2>
<p>Phishing is when cyber criminals pretend to be people or organizations you trust, like your bank or the government, to fool you into giving away personal information. They want things like your passwords, credit card numbers, or even who you are. It's like someone pretending to be your friend to get things from you that they shouldn't have.</p>

<h2>How Does it Work?</h2>
<p>Picture getting an email or a message on your phone that seems to be from your bank. 
    It might say something urgent like "Your account is in trouble, click here to fix it." 
    But when you click that link or reply to the message, you're not talking to your bank. 
    You're talking to a bad person who wants to steal from you. 
    These bad people want your information to take your money or pretend to be you online.</p>
<p>We'll explain more about this in our breakdown of different types of phishing.</p>
<p>Below is a short video to help understand and visualize phishing and its dangers.</p>
<div class="video-container">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/Y7zNlEMDmI4" frameborder="0" allowfullscreen></iframe>
</div>

<h2>Explore More</h2>
<p>Ready to learn more about phishing and how to protect yourself online? Click the buttons below to explore different types of phishing attacks:</p>
<a href="phishing.php" class="next-button">Email Phishing</a>
<a href="websitePhishing.php" class="next-button">Website Phishing</a>
<a href="Vishing.php" class="next-button">Vishing</a>
<a href="Smishing.php" class="next-button">Smishing</a>
HTML;
$aboutContent = <<<HTML
<h2>About PhishGuardian</h2>
        
        <p>At PhishGuardian, we understand the importance of staying safe online, especially for older adults who may be new to the digital world or who want to enhance their cybersecurity knowledge. 
            That's why we've created a specialized online learning platform tailored just for you.</p>

            <h2>What is PhishGuardian?</h2>
            <p>PhishGuardian is your dedicated resource for learning about phishing and improving your online safety skills. 
                Phishing is a common cyber threat where scammers try to trick you into giving away personal information, like passwords or credit card numbers. This is done by pretending to be someone trustworthy, such as a bank or government agency. 
                Our platform provides comprehensive education and practical tools to help you recognize and avoid these scams. </p>

                <h2>Why Choose PhishGuardian?</h2>
                <p>Designed specifically for older adults, PhishGuardian offers user-friendly and accessible resources that cater to your learning needs. 
                    Whether you're new to the internet or looking to sharpen your cybersecurity skills, our platform provides clear and easy-to-follow Information, tips, and a quiz to help you get ready to be online with confidence. </p>


                <h2>What You'll Learn</h2>
                <ul> 
                <li>Understanding Phishing: Learn what phishing is, how it works, and why it's important to stay vigilant online.</li>
                <li>Spotting Phishing Attempts: Discover common tactics used by scammers and develop skills to recognize phishing emails, messages, websites and more.</li>
                <li>Protecting Yourself: Discover simple and effective ways to keep your personal information and money safe from phishing scams.</li>
                <li>Reporting Phishing: Learn how to report phishing attempts and contribute to making the internet safer for everyone.</li>
                </ul>
    
            <h2>Help us make it better</h2>
            <p>Once you have gone through the various fetures and locations within this site, please take a few minutes to give us some feedback in the below survey to help make improvements to make it eaiser and more valuable for everyine. Thank you!</p>
            <a href="https://forms.office.com/pages/responsepage.aspx?id=OcL4BRfLVUejRQSHUgY8O_56A3zGRdVHihmTCe-MRvVUQ1VEWDZGM1UyWjRRVk03UTA0SDZQS0g3SS4u" class="next-button">Survey</a>
HTML;
$emailPhishing = <<<HTML
<h2>Email Phishing</h2>
<p>
    Email phishing is when bad people send fake emails to trick you into giving away important information like your usernames, passwords, or money details. These emails might look real, like they're from your bank or the government.
</p>
<p>
    Here are some signs to watch for in phishing emails:
</p>
<ul>
    <li><strong>Suspicious sender:</strong> Be careful of emails from people you don't know or emails with strange addresses.</li>
    <li><strong>Urgency or fear:</strong> Phishing emails often try to scare you into doing something quickly.</li>
    <li><strong>Asking for personal info:</strong> Real organizations usually don't ask for important info through email.</li>
    <li><strong>Spelling mistakes:</strong> Watch out for emails with lots of mistakes. They might be phishing.</li>
</ul>
<p>
    Here's a picture showing what these signs might look like in an email:
</p>
<div class="image-examples">
    <img src="email_phishing_example1.jpg" alt="Email Phishing Example 1" class="example-image">
</div>
<p>
    To keep safe from email phishing, remember these tips:
</p>
<ul>
    <li><strong>Check sender:</strong> Make sure the email comes from who it says it's from before you click on anything or share personal info.</li>
    <li><strong>Don't click strange links:</strong> Hover over links to see where they go. If they look odd, don't click them.</li>
    <li><strong>Be careful with attachments:</strong> Don't open attachments from people you don't know. They might have bad stuff in them.</li>
    <li><strong>Use spam filters:</strong> Turn on spam filters in your email to help stop phishing emails.</li>
</ul>
<p>
    Remember, it's best to be careful with emails you didn't expect. If you think an email might be phishing, tell your email provider and delete it.
</p>

<section class="faq">
    <h2>Frequently Asked Questions</h2>
    <p>Here are some common questions about email phishing:</p>
    <ul>
        <li>Q: How can I identify a phishing email?</li>
        <li>A: Look for signs such as suspicious sender addresses, urgent language, and requests for personal information.</li>
        <li>Q: What should I do if I receive a phishing email?</li>
        <li>A: Do not click on any links or provide any personal information. Report the email to your email provider.</li>
    </ul>
</section>

<a href="phishMain.php" class="next-button">Phishing</a>
<a href="websitePhishing.php" class="next-button">Website Phishing</a>
<a href="Vishing.php" class="next-button">Vishing</a>
<a href="Smishing.php" class="next-button">Smishing</a>
HTML;
$vishing = <<<HTML
<h2>Vishing (Voice Phishing)</h2>
            <p>
                Vishing, also known as voice phishing, occurs when scammers use phone calls to deceive individuals into providing personal information or financial details. They may pretend to be from legitimate organizations such as banks, government agencies, or tech support companies.
            </p>
            <p>
                Here are some signs of vishing to watch out for:
            </p>
            <ul>
                <li><strong>Caller ID Spoofing:</strong> Scammers may use spoofed caller IDs to make it appear as though they are calling from a trusted source.</li>
                <li><strong>Urgency or Fear Tactics:</strong> Vishing calls often use urgent language or fear tactics to pressure victims into providing information or taking immediate action.</li>
                <li><strong>Request for Personal Information:</strong> Be cautious if the caller asks for sensitive information such as social security numbers, account numbers, or passwords.</li>
                <li><strong>Threats of Consequences:</strong> Scammers may threaten consequences such as legal action, fines, or account closure if personal information is not provided.</li>
            </ul>
            <p>
                To protect yourself from vishing scams, follow these tips:
            </p>
            <ul>
                <li><strong>Verify Caller Identity:</strong> If you receive an unexpected call requesting personal information, hang up and call the official number of the organization to verify the legitimacy of the call.</li>
                <li><strong>Avoid Sharing Personal Information:</strong> Do not provide personal or financial information over the phone unless you initiated the call and are sure of the caller's identity.</li>
                <li><strong>Be Skeptical:</strong> Be skeptical of unsolicited calls, especially those that use urgency or threats to pressure you into providing information.</li>
                <li><strong>Report Suspicious Calls:</strong> If you receive a suspected vishing call, report it to the appropriate authorities or your phone provider.</li>
            </ul>

            <!-- Visual Aid -->
            <div class="visual-aid">
                <h3>Visual Aid</h3>
                <img src="vishing1.jpg" alt="Vishing Visual Aid">
            </div>

            <!-- Real-Life Examples -->
            <div class="real-life-examples">
                <h3>Real-Life Examples</h3>
                <p>Here are some real-life examples of vishing scams targeting older adults:</p>
                <ul>
                    <li>An older adult receives a call from someone claiming to be from their bank, asking for their account information to "verify" their identity.</li>
                    <li>A senior citizen receives a call from a supposed government agency threatening legal action if they don't provide their social security number immediately.</li>
                </ul>
                <p>You can read more about similar examples below</p>
                <a href="https://www.quostar.com/blog/what-is-vishing/" class="button">Read Here</a>
            </div>

            <!-- Frequently Asked Questions -->
            <div class="faq">
                <h3>Frequently Asked Questions</h3>
                <p>Here are some common questions about vishing:</p>
                <ul>
                    <li>Q: How do scammers get my phone number for vishing calls?</li>
                    <li>A: Scammers may obtain phone numbers from public directories, data breaches, or through random dialing.</li>
                    <li>Q: What should I do if I receive a suspicious vishing call?</li>
                    <li>A: Hang up immediately and report the call to the appropriate authorities or your phone provider.</li>
                </ul>
            </div>

            <a href="phishMain.php" class="next-button">Phishing</a>
            <a href="phishing.php" class="next-button">Email Phishing</a>
            <a href="websitePhishing.php" class="next-button">Website Phishing</a>
            <a href="Smishing.php" class="next-button">Smishing</a>

HTML;
$smishing = <<<HTML
<h2>Smishing (SMS Phishing)</h2>
            <p>
                Smishing, also known as SMS phishing, is a type of cyber attack where scammers use text messages to deceive individuals into providing personal information or clicking on malicious links. These messages often appear to be from legitimate sources, such as banks, government agencies, or popular companies.
            </p>
            <p>
                Here are some signs of smishing to watch out for:
            </p>
            <ul>
                <li><strong>Urgent or Suspicious Messages:</strong> Be cautious of text messages that use urgent language or request immediate action, especially if they ask for personal information or financial details.</li>
                <li><strong>Unknown Sender:</strong> If you receive a text message from an unknown sender or an unfamiliar number, be wary of clicking on any links or responding to the message.</li>
                <li><strong>Grammatical Errors:</strong> Smishing messages often contain grammatical errors or spelling mistakes, as they are typically sent hastily by scammers.</li>
                <li><strong>Requests for Personal Information:</strong> Legitimate organizations typically do not request sensitive information via text message. Be cautious if a message asks for passwords, account numbers, or other confidential data.</li>
            </ul>
            <p>
                Below is an image showing some of these signs and how they might be displayed in an text message:
            </p>
            <div class="image-examples">
                <img src="smishing example 1.jpg" alt="Smishing Example 1" class="example-image">
            </div>
            <p>
                To protect yourself from smishing scams, follow these tips:
            </p>
            <ul>
                <li><strong>Verify Sender Identity:</strong> Before responding to a text message, verify the sender's identity by checking the phone number or contacting the organization directly through official channels.</li>
                <li><strong>Avoid Clicking on Links:</strong> Do not click on links in text messages from unknown senders, especially if they seem suspicious or lead to unfamiliar websites.</li>
                <li><strong>Report Suspicious Messages:</strong> If you receive a suspected smishing message, report it to your mobile carrier and delete it immediately. You can also forward the message to the Federal Trade Commission (FTC) at 7726 (SPAM) to report it as spam.</li>
                <li><strong>Trust Your Instincts:</strong> If a message seems too good to be true or raises suspicions, trust your instincts and refrain from interacting with it.</li>
            </ul>
            <section class="faq">
                <h3>Frequently Asked Questions</h3>
                <p>Here are some common questions about smishing:</p>
                <ul>
                    <li>Q: How can I recognize a smishing message?</li>
                    <li>A: Look for signs such as urgent language, requests for personal information, and unknown sender numbers.</li>
                    <li>Q: What should I do if I receive a suspicious text message?</li>
                    <li>A: Do not click on any links or respond to the message. Report the message to your mobile carrier.</li>
                </ul>
            </section>
            <a href="phishMain.php" class="next-button">Phishing</a>
            <a href="phishing.php" class="next-button">Email Phishing</a>
            <a href="websitePhishing.php" class="next-button">Website Phishing</a>
            <a href="Vishing.php" class="next-button">Vishing</a>
HTML;
$webPhishing = <<<HTML
<h2>Website Phishing</h2>
<p>
    Website phishing is a form of cyber attack where attackers create fake websites that mimic legitimate ones in order to steal sensitive information from users. These fraudulent websites often look convincing and may even use similar URLs to the real websites they are impersonating.
</p>
<p>
    Here are some common characteristics of website phishing attacks:
</p>
<ul>
    <li><strong>URL manipulation:</strong> Attackers may use URLs that closely resemble those of legitimate websites, but with slight variations or misspellings.</li>
    <li><strong>Deceptive content:</strong> Phishing websites often contain forms or login pages that prompt users to enter sensitive information such as usernames, passwords, or credit card details.</li>
    <li><strong>Impersonation of trusted brands:</strong> Attackers may impersonate well-known brands, financial institutions, or government agencies to gain the trust of users.</li>
    <li><strong>Urgency or fear tactics:</strong> Phishing websites may use urgent language or fear tactics to pressure users into taking immediate action, such as providing personal information or making a payment.</li>
</ul>
<p>
    Below is an example of a phishing website that impersonates popular shopping website Amazon:
</p>
<div class="image-examples">
    <img src="website-spoofing.jpg" alt="Website Phishing Example 1" class="example-image">
</div>
<p>
    To protect yourself from website phishing scams, consider the following precautions:
</p>
<ul>
    <li><strong>Check the URL:</strong> Always check the URL of a website before entering any sensitive information. Look for HTTPS encryption and verify the domain name matches the legitimate website.</li>
    <li><strong>Use bookmarks:</strong> Instead of clicking on links in emails or messages, use bookmarks or type the URL directly into your browser to access trusted websites.</li>
    <li><strong>Enable browser security features:</strong> Many web browsers offer built-in security features, such as phishing filters and website reputation ratings. Enable these features for added protection.</li>
    <li><strong>Stay informed:</strong> Stay up-to-date on the latest phishing techniques and scams, and educate yourself on how to recognize and avoid them.</li>
</ul>
<p>
    By remaining vigilant and cautious when browsing the web, you can help protect yourself from falling victim to website phishing attacks.
</p>

<section class="faq">
    <h2>Frequently Asked Questions</h2>
    <p>Here are some common questions about website phishing:</p>
    <ul>
        <li>Q: How can I identify a phishing website?</li>
        <li>A: Look for signs such as suspicious URLs, deceptive content, and impersonation of trusted brands.</li>
        <li>Q: What should I do if I encounter a phishing website?</li>
        <li>A: Close the website immediately, do not enter any personal information, and report the phishing attempt to the appropriate authorities.</li>
    </ul>
</section>

<a href="phishMain.php" class="next-button">Phishing</a>
<a href="phishing.php" class="next-button">Email Phishing</a>
<a href="Vishing.php" class="next-button">Vishing</a>
<a href="Smishing.php" class="next-button">Smishing</a>
HTML;
$resources = <<<HTML
<!-- Resources Content -->
HTML;
?>