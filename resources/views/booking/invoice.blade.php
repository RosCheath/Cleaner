<link rel="stylesheet" href="{{asset('invoice.css')}}">
<table class="body-wrap">
    <tbody><tr>
        <td></td>
        <td class="container" width="600">
            <div class="content">
                <table class="main" width="100%" cellpadding="0" cellspacing="0">
                    <tbody><tr>
                        <td class="content-wrap aligncenter">
                            <table width="100%" cellpadding="0" cellspacing="0">
                                <tbody><tr>
                                    <td class="content-block">
                                        <h2>Thanks for using</h2>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="content-block">
                                        <table class="invoice">

                                            <tbody><tr>
                                                <td>{{$booking->user->name}}<br>Invoice #12345<br>{{$booking->created_at}}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <table class="invoice-items" cellpadding="0" cellspacing="0">
                                                        <tbody><tr>
                                                            <td>Service: {{$booking->service->name}}</td>
                                                            <td class="alignright">$ {{$booking->service->price}}</td>
                                                        </tr>
                                                        <tr class="total">
                                                            <td class="alignright" width="80%">Total</td>
                                                            <td class="alignright">$ {{$booking->service->price}}</td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            </tbody></table>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="content-block">
                                        <a href="{{route('home')}}">go home page</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="content-block">
                                        Company Cleaner Rupp Student, ITE 2022
                                    </td>
                                </tr>
                                </tbody></table>
                        </td>
                    </tr>
                    </tbody></table>
                <div class="footer">
                    <table width="100%">
                        <tbody><tr>
                            <td class="aligncenter content-block">Questions? Email <a href="mailto:">support@company.inc</a></td>
                        </tr>
                        </tbody></table>
                </div></div>
        </td>
        <td></td>
    </tr>
    </tbody></table>
