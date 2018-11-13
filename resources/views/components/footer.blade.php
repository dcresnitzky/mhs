@section('footer')
<!-- Footer
================================================== -->
<footer class="footer">
    <div class="container">
        <div class="row" style="margin-bottom: 50px;">
            <div class="span8">
                <div class="widget">
                    <img src="{{asset('assets/img/logo_mhs_branco.png')}}" width="">


                    <h4 class="slogan">{{\Lang::get('default.slogan')}}</h4>
                </div>
            </div>
            <div class="span4">
                <div class="widget get-in-touch">
                    <h4><i class="m-icon-big-swapright m-icon-white" style="margin: 4px;"></i>&nbsp;&nbsp;{{\Lang::get('default.footer.get-in-touch')}}</h4>
                    <address>
                        <i class="icon-envelope icon-white"></i>&nbsp;&nbsp;<a href="mailto:mariahelena@mhsglobal.com.br">mariahelena@mhsglobal.com.br</a>
                    </address>

                </div>
            </div>
            </div>
    </div>

    <div class="verybottom">
        <div class="container">
            <div class="row">
                <div class="span6">
                    <p>&copy; 2010 - {!! date("Y") !!} MHS Global - {{\Lang::get('default.footer.all-rights-reserved')}}</p></a>
                </div>
                <div class="span6">
                    <div class="pull-right">
                        <div class="credits">
                            {{\Lang::get('default.footer.designed-by')}} <a target="_blank" href="http://www.wisebyte.com.br/">Wisebyte</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</footer>
@endsection