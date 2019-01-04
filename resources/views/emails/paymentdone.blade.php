<html>
<head>
<!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container"style="margin-left:-px ">
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-3">
<div id="invoice">

<div class="toolbar hidden-print">
    
<div class="invoice overflow-auto">
    <div style="width: 600px">
        <header>
            <div class="row">
                <div class="col">
                    <a target="_blank" href="https://lobianijs.com">
                        <img src="img/waves.png" data-holder-rendered="true" />
                        </a>
                </div>
                <div class="col company-details">
                    <h2 class="name">
                        <a target="_blank" href="/">
                        WAVES
                        </a>
                    </h2>
                    <div>Ranawiru mawatha, Mirissa 81740, Sri Lanka</div>
                    <div>(123) 456-789</div>
                    <div>waves@gmail.com</div>
                </div>
            </div>
        </header>
        <main>
            <div class="row contacts">
                <div class="col invoice-to">
                    <div class="text-primary">INVOICE TO:</div>
                    <h2 class="to">{{$invoice->fname}} {{$invoice->lname}}</h2>
                    <div class="telephon">{{$invoice->telephone}}</div>
                    <div class="email">{{$invoice->email}}</div>
                </div>
                <div class="col invoice-details">
                    <h1 class="text-primary small">INVOICE 00{{$invoice->invoiceid}}</h1>
                    <div class="date">Date of Invoice: {{$invoice->created_at}}</div>
                    <div class="date">Due Date: {{$trips->start_date}}</div>
                    
                </div>
            </div>
            <table border="1" cellspacing="0" cellpadding="0">
                <thead>
                    <tr>
                        <th></th>
                        <th class="text-left">Description</th> 
                        <th class="text-right">No of seats</th>
                        <th class="text-right">price per head</th>
                        
                        <th class="text-right">TOTAL</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="no">01</td>
                        <td class="text-left"><p>Location:{{$trips->location}} <br>Trip Date:{{$trips->start_date}}<br>Boat ID:{{$trips->boatid}} </p></td> 
                        <td class="qty">{{$Noofseats}}</td>
                    <td>{{$priceperhead}}</td>
                    {{-- <td class="unit">{{$discountedprice}}}</td> --}}
                        <td class="total">{{$finalprice}}</td>
                    </tr>
                    
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="2"></td>
                        <td colspan="2">Other Charges</td>
                        <td>$0 X 0</td>
                    </tr>
                    <tr>
                        <td colspan="2"></td>
                        <td colspan="2">Discounted price</td>
                        <td>{{$discountedprice}}</td>
                    </tr>
                    <tr>
                        <td colspan="2"></td>
                        <td colspan="2">GRAND TOTAL</td>
                        <td>{{$finalprice}}</td>
                    </tr>
                </tfoot>
            </table>
            <div class="thanks">Thank you!</div>
            <div class="notices">
                <div>please be kind enough to produce the invoice at the check in</div>
                <div class="notice"></div>
            </div>
        </main>
        <footer>
            Invoice was created on a computer and is valid without the signature and seal.
        </footer>
    </div>
    <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
    <div></div>
</div>
</div>
</div>
<div class="col-sm-3"></div>
</div>
</div>
</body>
<style>
#invoice{
    padding: 30px;
}

.invoice {
    position: relative;
    background-color: #FFF;
    min-height: 680px;
    padding: 15px
}

.invoice header {
    padding: 10px 0;
    margin-bottom: 20px;
    border-bottom: 1px solid #3989c6
}

.invoice .company-details {
    text-align: right
}

.invoice .company-details .name {
    margin-top: 0;
    margin-bottom: 0
}

.invoice .contacts {
    margin-bottom: 20px
}

.invoice .invoice-to {
    text-align: left
}

.invoice .invoice-to .to {
    margin-top: 0;
    margin-bottom: 0
}

.invoice .invoice-details {
    text-align: right
}

.invoice .invoice-details .invoice-id {
    margin-top: 0;
    color: #3989c6
}

.invoice main {
    padding-bottom: 50px
}

.invoice main .thanks {
    margin-top: -100px;
    font-size: 2em;
    margin-bottom: 50px
}

.invoice main .notices {
    padding-left: 6px;
    border-left: 6px solid #3989c6
}

.invoice main .notices .notice {
    font-size: 1.2em
}

.invoice table {
    width: 100%;
    border-collapse: collapse;
    border-spacing: 0;
    margin-bottom: 20px
}

.invoice table td,.invoice table th {
    padding: 15px;
    background: #eee;
    border-bottom: 1px solid #fff
}

.invoice table th {
    white-space: nowrap;
    font-weight: 400;
    font-size: 16px
}

.invoice table td h3 {
    margin: 0;
    font-weight: 400;
    color: #3989c6;
    font-size: 1.2em
}

.invoice table .qty,.invoice table .total,.invoice table .unit {
    text-align: right;
    font-size: 1.2em
}

.invoice table .no {
    color: #fff;
    font-size: 1.6em;
    background: #3989c6
}

.invoice table .unit {
    background: #ddd
}

.invoice table .total {
    background: #3989c6;
    color: #fff
}

.invoice table tbody tr:last-child td {
    border: none
}

.invoice table tfoot td {
    background: 0 0;
    border-bottom: none;
    white-space: nowrap;
    text-align: right;
    padding: 10px 20px;
    font-size: 1.2em;
    border-top: 1px solid #aaa
}

.invoice table tfoot tr:first-child td {
    border-top: none
}

.invoice table tfoot tr:last-child td {
    color: #3989c6;
    font-size: 1.4em;
    border-top: 1px solid #3989c6
}

.invoice table tfoot tr td:first-child {
    border: none
}

.invoice footer {
    width: 100%;
    text-align: center;
    color: #777;
    border-top: 1px solid #aaa;
    padding: 8px 0
}

@media print {
    .invoice {
        font-size: 11px!important;
        overflow: hidden!important
    }

    .invoice footer {
        position: absolute;
        bottom: 10px;
        page-break-after: always
    }

    .invoice>div:last-child {
        page-break-before: always
    }
}
</style>
</html>