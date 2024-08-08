<h1>Contract Form Submission</h1>
<!-- Embedding the logo -->
<img src="{{ public_path('assets/img/logo.png') }}" alt="Company Logo" style="max-width: 200px;">

<h1>Job Contract</h1>
<p>Dear {{ $names }},</p>

<p>This contract ("Contract") is entered into between DDIN, a company registered under the laws of Rwanda ("Company"), and {{ $names }}, an individual ("Employee").</p>

<p><strong>1. Position:</strong> Employee is hired for the position of <?php foreach ($services as $key => $value) {
                                                                            $services[$key] = htmlspecialchars($value);
                                                                            echo $value . ",";
                                                                        } ?></p>

<p><strong>2. Start Date:</strong> Employee's employment with the Company will commence on: <span id="current-date"></span></p>

<p><strong>3. Terms and Conditions:</strong> Employee agrees to abide by the terms and conditions set forth in this Contract.</p>

<h3><strong>PRICE AND PAYMENT</strong></h3>
<p> - The Client agrees to compensate the Designer an amount of ___________ per hour and the Designer agrees to invoice the Client for the total amount of hours worked at the end of each month.</p>
<p>- The Parties agree that in the event that the invoices are not paid within thirty days of receiving them, the Designer will be entitled to charge a late fee of ________________.</p>
<h3><strong>CONFIDENTIALITY</strong></h3>
<p>- All terms and conditions of this Agreement and any confidential information must be kept confidential, unless the disclosure is required pursuant to process of law.</p>
<p>- Disclosing or using this information for any purpose beyond the scope of this Agreement, or beyond the exceptions set forth above, is expressly forbidden without the prior consent of the Parties.</p>
<p>- The Parties agree that the confidentiality clause in this Agreement will remain active and in power even upon the termination of this Agreement.</p>
<h3><strong>INTELLECTUAL PROPERTY</strong></h3>

<h3><strong>PRICE AND PAYMENT</strong></h3>
<p> - The Client agrees to compensate the Designer an amount of ___________ per hour and the Designer agrees to invoice the Client for the total amount of hours worked at the end of each month.</p>
<p>- The Parties agree that in the event that the invoices are not paid within thirty days of receiving them, the Designer will be entitled to charge a late fee of ________________.</p>
<h3><strong>CONFIDENTIALITY</strong></h3>
<p>- All terms and conditions of this Agreement and any confidential information must be kept confidential, unless the disclosure is required pursuant to process of law.</p>
<p>- Disclosing or using this information for any purpose beyond the scope of this Agreement, or beyond the exceptions set forth above, is expressly forbidden without the prior consent of the Parties.</p>
<p>- The Parties agree that the confidentiality clause in this Agreement will remain active and in power even upon the termination of this Agreement.</p>
<h3><strong>INTELLECTUAL PROPERTY</strong></h3>

<h3><strong>PRICE AND PAYMENT</strong></h3>
<p> - The Client agrees to compensate the Designer an amount of ___________ per hour and the Designer agrees to invoice the Client for the total amount of hours worked at the end of each month.</p>
<p>- The Parties agree that in the event that the invoices are not paid within thirty days of receiving them, the Designer will be entitled to charge a late fee of ________________.</p>
<h3><strong>CONFIDENTIALITY</strong></h3>
<p>- All terms and conditions of this Agreement and any confidential information must be kept confidential, unless the disclosure is required pursuant to process of law.</p>
<p>- Disclosing or using this information for any purpose beyond the scope of this Agreement, or beyond the exceptions set forth above, is expressly forbidden without the prior consent of the Parties.</p>
<p>- The Parties agree that the confidentiality clause in this Agreement will remain active and in power even upon the termination of this Agreement.</p>
<h3><strong>INTELLECTUAL PROPERTY</strong></h3>

<h3><strong>PRICE AND PAYMENT</strong></h3>
<p> - The Client agrees to compensate the Designer an amount of ___________ per hour and the Designer agrees to invoice the Client for the total amount of hours worked at the end of each month.</p>
<p>- The Parties agree that in the event that the invoices are not paid within thirty days of receiving them, the Designer will be entitled to charge a late fee of ________________.</p>
<h3><strong>CONFIDENTIALITY</strong></h3>
<p>- All terms and conditions of this Agreement and any confidential information must be kept confidential, unless the disclosure is required pursuant to process of law.</p>
<p>- Disclosing or using this information for any purpose beyond the scope of this Agreement, or beyond the exceptions set forth above, is expressly forbidden without the prior consent of the Parties.</p>
<p>- The Parties agree that the confidentiality clause in this Agreement will remain active and in power even upon the termination of this Agreement.</p>
<h3><strong>INTELLECTUAL PROPERTY</strong></h3>

<h3><strong>PRICE AND PAYMENT</strong></h3>
<p> - The Client agrees to compensate the Designer an amount of ___________ per hour and the Designer agrees to invoice the Client for the total amount of hours worked at the end of each month.</p>
<p>- The Parties agree that in the event that the invoices are not paid within thirty days of receiving them, the Designer will be entitled to charge a late fee of ________________.</p>
<h3><strong>CONFIDENTIALITY</strong></h3>
<p>- All terms and conditions of this Agreement and any confidential information must be kept confidential, unless the disclosure is required pursuant to process of law.</p>
<p>- Disclosing or using this information for any purpose beyond the scope of this Agreement, or beyond the exceptions set forth above, is expressly forbidden without the prior consent of the Parties.</p>
<p>- The Parties agree that the confidentiality clause in this Agreement will remain active and in power even upon the termination of this Agreement.</p>
<h3><strong>INTELLECTUAL PROPERTY</strong></h3>

<p>By signing this Contract, both parties acknowledge and agree to the terms and conditions stated herein.</p>

<p><strong>Company:</strong> DDIN</p>
<p><strong>Employee:</strong> {{ $names }}</p>

<p><strong>Date:</strong><span id="current-date"></span></p>
<img src="{{ public_path('assets/img/signature.png') }}" alt="Company Logo" style="max-width: 200px;">

<script>
    // JavaScript to insert the current date
    const currentDate = new Date();
    const dateString = currentDate.toDateString(); // Format the date as a string
    document.getElementById('current-date').innerText = dateString;
</script>