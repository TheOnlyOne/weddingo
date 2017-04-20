@extends('layouts.master-client-layout.header-ext')
@section('title', 'invoice')
@section('content')
<div class="col-md-12">
                    <div class="white-box printableArea">
                        <h3><b>אישור תשלום</b> <span class="pull-right">#5669626</span></h3>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="pull-left">
                                    <address>
                                        <h3> &nbsp;<b class="text-danger">וודינגו</b></h3>
                                        <p class="text-muted m-l-5">ישראל<br/>
                                            רמת גן<br/>
                                    </address>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="table-responsive m-t-40" style="clear: both;">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th>תיאור</th>
                                            <th class="text-right">כמות</th>
                                            <th class="text-right">מחיר יחידה</th>
                                            <th class="text-right">סה"כ</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td>Milk Powder</td>
                                            <td class="text-right">2 </td>
                                            <td class="text-right"> $24 </td>
                                            <td class="text-right"> $48 </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">2</td>
                                            <td>Air Conditioner</td>
                                            <td class="text-right"> 3 </td>
                                            <td class="text-right"> $500 </td>
                                            <td class="text-right"> $1500 </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">3</td>
                                            <td>RC Cars</td>
                                            <td class="text-right"> 20 </td>
                                            <td class="text-right"> %600 </td>
                                            <td class="text-right"> $12000 </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">4</td>
                                            <td>Down Coat</td>
                                            <td class="text-right"> 60 </td>
                                            <td class="text-right">$5 </td>
                                            <td class="text-right"> $300 </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="pull-right m-t-30 text-right">
                                    <p>סה"כ: 180 שקל</p>
                                    <p>מס (10%): 18 </p>
                                    <hr>
                                    <h3><b>סה"כ לתשלום:</b> 198 שקל</h3>
                                </div>
                                <div class="clearfix"></div>
                                <hr>
                                <div class="text-right">
                                    <button class="btn btn-danger" type="submit"> המשך לתשלום </button>
                                    <button id="print" class="btn btn-default btn-outline" type="button"> <span><i class="fa fa-print"></i> הדפס</span> </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
@section('ext-footer-scripts')
<script src="js/jquery.PrintArea.js" type="text/JavaScript"></script>
<script>
    $(document).ready(function(){
        $("#print").click(function(){
            var mode = 'iframe'; //popup
            var close = mode == "popup";
            var options = { mode : mode, popClose : close};
            $("div.printableArea").printArea( options );
        });
    });
</script>
@endsection