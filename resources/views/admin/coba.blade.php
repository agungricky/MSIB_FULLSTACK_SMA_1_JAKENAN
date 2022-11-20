@extends('admin.index')
@section('content')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row purchace-popup">
            <div class="col-12 stretch-card grid-margin">
                <div class="card card-secondary motivasi">
                    <span class="card-body d-lg-flex align-items-center">
                        <p class="mb-lg-0">"Belajar memang kadang membosankan tapi demi menggapai impianmu dan masa depan yang cerah, bersemangatlah dalam mencari ilmu." </p>
                        <button class="close popup-dismiss ml-2">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </span>
                </div>
            </div>
        </div>

        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> Chartist </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Charts</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Chartist</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Simple Line chart</h4>
                            <div class="ct-chart ct-perfect-fourth" id="ct-chart-line"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-line" style="width: 100%; height: 100%;">
                                    <g class="ct-grids">
                                        <line x1="50" x2="50" y1="15" y2="217" class="ct-grid ct-horizontal"></line>
                                        <line x1="111.5" x2="111.5" y1="15" y2="217" class="ct-grid ct-horizontal"></line>
                                        <line x1="173" x2="173" y1="15" y2="217" class="ct-grid ct-horizontal"></line>
                                        <line x1="234.5" x2="234.5" y1="15" y2="217" class="ct-grid ct-horizontal"></line>
                                        <line x1="296" x2="296" y1="15" y2="217" class="ct-grid ct-horizontal"></line>
                                        <line y1="217" y2="217" x1="50" x2="296" class="ct-grid ct-vertical"></line>
                                        <line y1="176.6" y2="176.6" x1="50" x2="296" class="ct-grid ct-vertical"></line>
                                        <line y1="136.2" y2="136.2" x1="50" x2="296" class="ct-grid ct-vertical"></line>
                                        <line y1="95.8" y2="95.8" x1="50" x2="296" class="ct-grid ct-vertical"></line>
                                        <line y1="55.400000000000006" y2="55.400000000000006" x1="50" x2="296" class="ct-grid ct-vertical"></line>
                                        <line y1="15" y2="15" x1="50" x2="296" class="ct-grid ct-vertical"></line>
                                    </g>
                                    <g>
                                        <g class="ct-series ct-series-a">
                                            <path d="M50,23.08C70.5,39.24,91,58.632,111.5,71.56C132,84.488,152.5,103.88,173,103.88C193.5,103.88,214,87.72,234.5,87.72C255,87.72,275.5,120.04,296,136.2" class="ct-line"></path>
                                            <line x1="50" y1="23.080000000000013" x2="50.01" y2="23.080000000000013" class="ct-point" ct:value="12"></line>
                                            <line x1="111.5" y1="71.56" x2="111.51" y2="71.56" class="ct-point" ct:value="9"></line>
                                            <line x1="173" y1="103.88" x2="173.01" y2="103.88" class="ct-point" ct:value="7"></line>
                                            <line x1="234.5" y1="87.72" x2="234.51" y2="87.72" class="ct-point" ct:value="8"></line>
                                            <line x1="296" y1="136.2" x2="296.01" y2="136.2" class="ct-point" ct:value="5"></line>
                                        </g>
                                        <g class="ct-series ct-series-b">
                                            <path d="M50,184.68C70.5,190.067,91,200.84,111.5,200.84C132,200.84,152.5,176.151,173,160.44C193.5,144.729,214,103.88,234.5,103.88C255,103.88,275.5,146.973,296,168.52" class="ct-line"></path>
                                            <line x1="50" y1="184.68" x2="50.01" y2="184.68" class="ct-point" ct:value="2"></line>
                                            <line x1="111.5" y1="200.84" x2="111.51" y2="200.84" class="ct-point" ct:value="1"></line>
                                            <line x1="173" y1="160.44" x2="173.01" y2="160.44" class="ct-point" ct:value="3.5"></line>
                                            <line x1="234.5" y1="103.88" x2="234.51" y2="103.88" class="ct-point" ct:value="7"></line>
                                            <line x1="296" y1="168.52" x2="296.01" y2="168.52" class="ct-point" ct:value="3"></line>
                                        </g>
                                        <g class="ct-series ct-series-c">
                                            <path d="M50,200.84C70.5,190.067,91,175.702,111.5,168.52C132,161.338,152.5,157.747,173,152.36C193.5,146.973,214,141.587,234.5,136.2C255,130.813,275.5,125.427,296,120.04" class="ct-line"></path>
                                            <line x1="50" y1="200.84" x2="50.01" y2="200.84" class="ct-point" ct:value="1"></line>
                                            <line x1="111.5" y1="168.52" x2="111.51" y2="168.52" class="ct-point" ct:value="3"></line>
                                            <line x1="173" y1="152.36" x2="173.01" y2="152.36" class="ct-point" ct:value="4"></line>
                                            <line x1="234.5" y1="136.2" x2="234.51" y2="136.2" class="ct-point" ct:value="5"></line>
                                            <line x1="296" y1="120.04" x2="296.01" y2="120.04" class="ct-point" ct:value="6"></line>
                                        </g>
                                    </g>
                                    <g class="ct-labels">
                                        <foreignObject style="overflow: visible;" x="50" y="222" width="61.5" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 62px; height: 20px;">Monday</span></foreignObject>
                                        <foreignObject style="overflow: visible;" x="111.5" y="222" width="61.5" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 62px; height: 20px;">Tuesday</span></foreignObject>
                                        <foreignObject style="overflow: visible;" x="173" y="222" width="61.5" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 62px; height: 20px;">Wednesday</span></foreignObject>
                                        <foreignObject style="overflow: visible;" x="234.5" y="222" width="61.5" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 62px; height: 20px;">Thursday</span></foreignObject>
                                        <foreignObject style="overflow: visible;" x="296" y="222" width="30" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 30px; height: 20px;">Friday</span></foreignObject>
                                        <foreignObject style="overflow: visible;" y="176.6" x="10" height="40.4" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 40px; width: 30px;">0</span></foreignObject>
                                        <foreignObject style="overflow: visible;" y="136.2" x="10" height="40.4" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 40px; width: 30px;">2.5</span></foreignObject>
                                        <foreignObject style="overflow: visible;" y="95.79999999999998" x="10" height="40.400000000000006" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 40px; width: 30px;">5</span></foreignObject>
                                        <foreignObject style="overflow: visible;" y="55.400000000000006" x="10" height="40.39999999999999" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 40px; width: 30px;">7.5</span></foreignObject>
                                        <foreignObject style="overflow: visible;" y="15" x="10" height="40.400000000000006" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 40px; width: 30px;">10</span></foreignObject>
                                        <foreignObject style="overflow: visible;" y="-15" x="10" height="30" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 30px;">12.5</span></foreignObject>
                                    </g>
                                </svg></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Line scatterer</h4>
                            <div id="rickshaw-time-scale"></div>
                            <div class="ct-chart ct-perfect-fourth" id="ct-chart-line-scatterer"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-line" style="width: 100%; height: 100%;">
                                    <g class="ct-grids">
                                        <line x1="50" x2="50" y1="15" y2="217" class="ct-grid ct-horizontal"></line>
                                        <line x1="70.84615384615384" x2="70.84615384615384" y1="15" y2="217" class="ct-grid ct-horizontal"></line>
                                        <line x1="91.6923076923077" x2="91.6923076923077" y1="15" y2="217" class="ct-grid ct-horizontal"></line>
                                        <line x1="112.53846153846155" x2="112.53846153846155" y1="15" y2="217" class="ct-grid ct-horizontal"></line>
                                        <line x1="133.3846153846154" x2="133.3846153846154" y1="15" y2="217" class="ct-grid ct-horizontal"></line>
                                        <line x1="154.23076923076923" x2="154.23076923076923" y1="15" y2="217" class="ct-grid ct-horizontal"></line>
                                        <line x1="175.0769230769231" x2="175.0769230769231" y1="15" y2="217" class="ct-grid ct-horizontal"></line>
                                        <line x1="195.92307692307693" x2="195.92307692307693" y1="15" y2="217" class="ct-grid ct-horizontal"></line>
                                        <line x1="216.76923076923077" x2="216.76923076923077" y1="15" y2="217" class="ct-grid ct-horizontal"></line>
                                        <line x1="237.6153846153846" x2="237.6153846153846" y1="15" y2="217" class="ct-grid ct-horizontal"></line>
                                        <line x1="258.46153846153845" x2="258.46153846153845" y1="15" y2="217" class="ct-grid ct-horizontal"></line>
                                        <line x1="279.3076923076923" x2="279.3076923076923" y1="15" y2="217" class="ct-grid ct-horizontal"></line>
                                        <line x1="300.1538461538462" x2="300.1538461538462" y1="15" y2="217" class="ct-grid ct-horizontal"></line>
                                        <line y1="217" y2="217" x1="50" x2="321" class="ct-grid ct-vertical"></line>
                                        <line y1="196.8" y2="196.8" x1="50" x2="321" class="ct-grid ct-vertical"></line>
                                        <line y1="176.6" y2="176.6" x1="50" x2="321" class="ct-grid ct-vertical"></line>
                                        <line y1="156.4" y2="156.4" x1="50" x2="321" class="ct-grid ct-vertical"></line>
                                        <line y1="136.2" y2="136.2" x1="50" x2="321" class="ct-grid ct-vertical"></line>
                                        <line y1="116" y2="116" x1="50" x2="321" class="ct-grid ct-vertical"></line>
                                        <line y1="95.8" y2="95.8" x1="50" x2="321" class="ct-grid ct-vertical"></line>
                                        <line y1="75.6" y2="75.6" x1="50" x2="321" class="ct-grid ct-vertical"></line>
                                        <line y1="55.400000000000006" y2="55.400000000000006" x1="50" x2="321" class="ct-grid ct-vertical"></line>
                                        <line y1="35.19999999999999" y2="35.19999999999999" x1="50" x2="321" class="ct-grid ct-vertical"></line>
                                        <line y1="15" y2="15" x1="50" x2="321" class="ct-grid ct-vertical"></line>
                                    </g>
                                    <g>
                                        <g class="ct-series ct-series-a">
                                            <line x1="50" y1="204.96916829044466" x2="50.01" y2="204.96916829044466" class="ct-point" ct:value="5.955857281958088"></line>
                                            <line x1="55.21153846153846" y1="79.06081901495543" x2="55.22153846153846" y2="79.06081901495543" class="ct-point" ct:value="68.28672325992306"></line>
                                            <line x1="60.42307692307692" y1="124.47324810678653" x2="60.43307692307692" y2="124.47324810678653" class="ct-point" ct:value="45.80532271941261"></line>
                                            <line x1="65.63461538461539" y1="131.73406649733255" x2="65.64461538461539" y2="131.73406649733255" class="ct-point" ct:value="42.210858169637355"></line>
                                            <line x1="70.84615384615384" y1="94.7269992999688" x2="70.85615384615384" y2="94.7269992999688" class="ct-point" ct:value="60.531188465361986"></line>
                                            <line x1="76.0576923076923" y1="195.125600316315" x2="76.06769230769231" y2="195.125600316315" class="ct-point" ct:value="10.828910734497521"></line>
                                            <line x1="81.26923076923077" y1="16.83667533780593" x2="81.27923076923078" y2="16.83667533780593" class="ct-point" ct:value="99.09075478326439"></line>
                                            <line x1="86.48076923076923" y1="105.01267401240626" x2="86.49076923076923" y2="105.01267401240626" class="ct-point" ct:value="55.43927029088799"></line>
                                            <line x1="91.6923076923077" y1="81.96468974629005" x2="91.7023076923077" y2="81.96468974629005" class="ct-point" ct:value="66.84916349193563"></line>
                                            <line x1="96.90384615384616" y1="173.1859532740116" x2="96.91384615384617" y2="173.1859532740116" class="ct-point" ct:value="21.690122141578417"></line>
                                            <line x1="102.11538461538461" y1="105.6123908079772" x2="102.12538461538462" y2="105.6123908079772" class="ct-point" ct:value="55.1423807881301"></line>
                                            <line x1="107.32692307692308" y1="138.25422271126004" x2="107.33692307692309" y2="138.25422271126004" class="ct-point" ct:value="38.983058063732656"></line>
                                            <line x1="112.53846153846155" y1="133.0656748953423" x2="112.54846153846155" y2="133.0656748953423" class="ct-point" ct:value="41.551646091414696"></line>
                                            <line x1="117.75" y1="25.99378646034816" x2="117.76" y2="25.99378646034816" class="ct-point" ct:value="94.55753145527319"></line>
                                            <line x1="122.96153846153847" y1="42.39517843542225" x2="122.97153846153847" y2="42.39517843542225" class="ct-point" ct:value="86.43803047751373"></line>
                                            <line x1="128.1730769230769" y1="85.12997940515413" x2="128.1830769230769" y2="85.12997940515413" class="ct-point" ct:value="65.28218841329004"></line>
                                            <line x1="133.3846153846154" y1="140.15944151871525" x2="133.39461538461538" y2="140.15944151871525" class="ct-point" ct:value="38.039880436279574"></line>
                                            <line x1="138.59615384615387" y1="167.25575340060294" x2="138.60615384615386" y2="167.25575340060294" class="ct-point" ct:value="24.62586465316686"></line>
                                            <line x1="143.80769230769232" y1="158.9174581014039" x2="143.8176923076923" y2="158.9174581014039" class="ct-point" ct:value="28.75373361316639"></line>
                                            <line x1="149.01923076923077" y1="130.94360274438472" x2="149.02923076923076" y2="130.94360274438472" class="ct-point" ct:value="42.60217685921549"></line>
                                            <line x1="154.23076923076923" y1="42.88544400563555" x2="154.24076923076922" y2="42.88544400563555" class="ct-point" ct:value="86.19532474968537"></line>
                                            <line x1="159.44230769230768" y1="136.48462423152296" x2="159.45230769230767" y2="136.48462423152296" class="ct-point" ct:value="39.859096915087655"></line>
                                            <line x1="164.65384615384616" y1="180.21778630720772" x2="164.66384615384615" y2="180.21778630720772" class="ct-point" ct:value="18.209016679600143"></line>
                                            <line x1="169.8653846153846" y1="123.89566681659392" x2="169.8753846153846" y2="123.89566681659392" class="ct-point" ct:value="46.091254051191136"></line>
                                            <line x1="175.0769230769231" y1="152.17187196790348" x2="175.08692307692309" y2="152.17187196790348" class="ct-point" ct:value="32.09313268915669"></line>
                                            <line x1="180.28846153846155" y1="104.35927266393388" x2="180.29846153846154" y2="104.35927266393388" class="ct-point" ct:value="55.76273630498323"></line>
                                            <line x1="185.5" y1="192.03856241453306" x2="185.51" y2="192.03856241453306" class="ct-point" ct:value="12.357147319538086"></line>
                                            <line x1="190.71153846153845" y1="40.05941436770823" x2="190.72153846153844" y2="40.05941436770823" class="ct-point" ct:value="87.59434932291671"></line>
                                            <line x1="195.92307692307693" y1="142.78793559310895" x2="195.93307692307692" y2="142.78793559310895" class="ct-point" ct:value="36.73864574598566"></line>
                                            <line x1="201.1346153846154" y1="73.33557041494464" x2="201.14461538461538" y2="73.33557041494464" class="ct-point" ct:value="71.1210047450769"></line>
                                            <line x1="206.34615384615384" y1="74.42939529809289" x2="206.35615384615383" y2="74.42939529809289" class="ct-point" ct:value="70.57950727817183"></line>
                                            <line x1="211.55769230769232" y1="139.25674085311547" x2="211.5676923076923" y2="139.25674085311547" class="ct-point" ct:value="38.486761953903226"></line>
                                            <line x1="216.76923076923077" y1="142.96331221448565" x2="216.77923076923076" y2="142.96331221448565" class="ct-point" ct:value="36.651825636393234"></line>
                                            <line x1="221.98076923076923" y1="190.10701469032844" x2="221.99076923076922" y2="190.10701469032844" class="ct-point" ct:value="13.313359064193842"></line>
                                            <line x1="227.1923076923077" y1="54.37059015368902" x2="227.2023076923077" y2="54.37059015368902" class="ct-point" ct:value="80.50960883480742"></line>
                                            <line x1="232.40384615384616" y1="133.83804237536333" x2="232.41384615384615" y2="133.83804237536333" class="ct-point" ct:value="41.169285952790425"></line>
                                            <line x1="237.6153846153846" y1="206.53490299607188" x2="237.6253846153846" y2="206.53490299607188" class="ct-point" ct:value="5.180741091053531"></line>
                                            <line x1="242.8269230769231" y1="195.4585080486989" x2="242.83692307692309" y2="195.4585080486989" class="ct-point" ct:value="10.664104926386697"></line>
                                            <line x1="248.03846153846155" y1="196.6624968767237" x2="248.04846153846154" y2="196.6624968767237" class="ct-point" ct:value="10.06807085310707"></line>
                                            <line x1="253.25" y1="24.651028097162225" x2="253.26" y2="24.651028097162225" class="ct-point" ct:value="95.22226331823651"></line>
                                            <line x1="258.46153846153845" y1="129.35672350612924" x2="258.47153846153844" y2="129.35672350612924" class="ct-point" ct:value="43.38776064053007"></line>
                                            <line x1="263.6730769230769" y1="43.719331482294365" x2="263.6830769230769" y2="43.719331482294365" class="ct-point" ct:value="85.782509167181"></line>
                                            <line x1="268.88461538461536" y1="167.21879306105956" x2="268.89461538461535" y2="167.21879306105956" class="ct-point" ct:value="24.64416185096061"></line>
                                            <line x1="274.0961538461538" y1="204.742820508958" x2="274.1061538461538" y2="204.742820508958" class="ct-point" ct:value="6.067910639129703"></line>
                                            <line x1="279.3076923076923" y1="77.67254637907894" x2="279.3176923076923" y2="77.67254637907894" class="ct-point" ct:value="68.97398694105003"></line>
                                            <line x1="284.5192307692308" y1="211.4544191649833" x2="284.52923076923076" y2="211.4544191649833" class="ct-point" ct:value="2.7453370470379657"></line>
                                            <line x1="289.7307692307692" y1="173.53469397109617" x2="289.7407692307692" y2="173.53469397109617" class="ct-point" ct:value="21.517478232130603"></line>
                                            <line x1="294.94230769230774" y1="94.86059331809284" x2="294.9523076923077" y2="94.86059331809284" class="ct-point" ct:value="60.465052812825334"></line>
                                            <line x1="300.1538461538462" y1="143.08607462849363" x2="300.1638461538462" y2="143.08607462849363" class="ct-point" ct:value="36.59105216411206"></line>
                                            <line x1="305.36538461538464" y1="23.067229816886652" x2="305.37538461538463" y2="23.067229816886652" class="ct-point" ct:value="96.0063218728284"></line>
                                            <line x1="310.5769230769231" y1="141.8890105837638" x2="310.5869230769231" y2="141.8890105837638" class="ct-point" ct:value="37.18365812684961"></line>
                                            <line x1="315.78846153846155" y1="33.707845881183346" x2="315.79846153846154" y2="33.707845881183346" class="ct-point" ct:value="90.73869015783002"></line>
                                        </g>
                                        <g class="ct-series ct-series-b">
                                            <line x1="50" y1="31.202683193962827" x2="50.01" y2="31.202683193962827" class="ct-point" ct:value="91.978869705959"></line>
                                            <line x1="55.21153846153846" y1="85.02959815672256" x2="55.22153846153846" y2="85.02959815672256" class="ct-point" ct:value="65.3318821006324"></line>
                                            <line x1="60.42307692307692" y1="213.04827639444676" x2="60.43307692307692" y2="213.04827639444676" class="ct-point" ct:value="1.9562988146303195"></line>
                                            <line x1="65.63461538461539" y1="187.51506073218428" x2="65.64461538461539" y2="187.51506073218428" class="ct-point" ct:value="14.596504588027592"></line>
                                            <line x1="70.84615384615384" y1="188.3972368076092" x2="70.85615384615384" y2="188.3972368076092" class="ct-point" ct:value="14.159783758609311"></line>
                                            <line x1="76.0576923076923" y1="163.73885888496372" x2="76.06769230769231" y2="163.73885888496372" class="ct-point" ct:value="26.366901542097164"></line>
                                            <line x1="81.26923076923077" y1="211.49939119419903" x2="81.27923076923078" y2="211.49939119419903" class="ct-point" ct:value="2.723073666238096"></line>
                                            <line x1="86.48076923076923" y1="128.79978597665195" x2="86.49076923076923" y2="128.79978597665195" class="ct-point" ct:value="43.66347228878617"></line>
                                            <line x1="91.6923076923077" y1="15.653582529316566" x2="91.7023076923077" y2="15.653582529316566" class="ct-point" ct:value="99.67644429241754"></line>
                                            <line x1="96.90384615384616" y1="116.5450274761121" x2="96.91384615384617" y2="116.5450274761121" class="ct-point" ct:value="49.73018441776629"></line>
                                            <line x1="102.11538461538461" y1="43.333007251968525" x2="102.12538461538462" y2="43.333007251968525" class="ct-point" ct:value="85.97375878615419"></line>
                                            <line x1="107.32692307692308" y1="91.27826031685925" x2="107.33692307692309" y2="91.27826031685925" class="ct-point" ct:value="62.238484991653834"></line>
                                            <line x1="112.53846153846155" y1="26.805850590077995" x2="112.54846153846155" y2="26.805850590077995" class="ct-point" ct:value="94.15551950986237"></line>
                                            <line x1="117.75" y1="201.19617597790236" x2="117.76" y2="201.19617597790236" class="ct-point" ct:value="7.8236752584641795"></line>
                                            <line x1="122.96153846153847" y1="57.02139598481898" x2="122.97153846153847" y2="57.02139598481898" class="ct-point" ct:value="79.19732872038665"></line>
                                            <line x1="128.1730769230769" y1="153.99951572697188" x2="128.1830769230769" y2="153.99951572697188" class="ct-point" ct:value="31.188358551004026"></line>
                                            <line x1="133.3846153846154" y1="33.744783704777404" x2="133.39461538461538" y2="33.744783704777404" class="ct-point" ct:value="90.72040410654584"></line>
                                            <line x1="138.59615384615387" y1="163.4892509080125" x2="138.60615384615386" y2="163.4892509080125" class="ct-point" ct:value="26.49046984751856"></line>
                                            <line x1="143.80769230769232" y1="197.02771186836932" x2="143.8176923076923" y2="197.02771186836932" class="ct-point" ct:value="9.887271352292416"></line>
                                            <line x1="149.01923076923077" y1="83.77345866222143" x2="149.02923076923076" y2="83.77345866222143" class="ct-point" ct:value="65.95373333553395"></line>
                                            <line x1="154.23076923076923" y1="215.3444020286901" x2="154.24076923076922" y2="215.3444020286901" class="ct-point" ct:value="0.8196029560940121"></line>
                                            <line x1="159.44230769230768" y1="57.72775698923516" x2="159.45230769230767" y2="57.72775698923516" class="ct-point" ct:value="78.84764505483408"></line>
                                            <line x1="164.65384615384616" y1="86.26983985227147" x2="164.66384615384615" y2="86.26983985227147" class="ct-point" ct:value="64.71790106323195"></line>
                                            <line x1="169.8653846153846" y1="73.91665035659906" x2="169.8753846153846" y2="73.91665035659906" class="ct-point" ct:value="70.83334140762423"></line>
                                            <line x1="175.0769230769231" y1="74.08431282978228" x2="175.08692307692309" y2="74.08431282978228" class="ct-point" ct:value="70.7503401832761"></line>
                                            <line x1="180.28846153846155" y1="92.05454075206217" x2="180.29846153846154" y2="92.05454075206217" class="ct-point" ct:value="61.854187746503875"></line>
                                            <line x1="185.5" y1="70.21372694982773" x2="185.51" y2="70.21372694982773" class="ct-point" ct:value="72.66647180701598"></line>
                                            <line x1="190.71153846153845" y1="86.82075624690236" x2="190.72153846153844" y2="86.82075624690236" class="ct-point" ct:value="64.44517017480081"></line>
                                            <line x1="195.92307692307693" y1="77.09887927998312" x2="195.93307692307692" y2="77.09887927998312" class="ct-point" ct:value="69.2579805544638"></line>
                                            <line x1="201.1346153846154" y1="164.6939807378694" x2="201.14461538461538" y2="164.6939807378694" class="ct-point" ct:value="25.894068941648808"></line>
                                            <line x1="206.34615384615384" y1="18.24624844013786" x2="206.35615384615383" y2="18.24624844013786" class="ct-point" ct:value="98.39294631676343"></line>
                                            <line x1="211.55769230769232" y1="74.9817573267112" x2="211.5676923076923" y2="74.9817573267112" class="ct-point" ct:value="70.30606072935089"></line>
                                            <line x1="216.76923076923077" y1="186.51323030773736" x2="216.77923076923076" y2="186.51323030773736" class="ct-point" ct:value="15.092460243694372"></line>
                                            <line x1="221.98076923076923" y1="52.70903588638896" x2="221.99076923076922" y2="52.70903588638896" class="ct-point" ct:value="81.3321604522827"></line>
                                            <line x1="227.1923076923077" y1="26.780525798755832" x2="227.2023076923077" y2="26.780525798755832" class="ct-point" ct:value="94.16805653526939"></line>
                                            <line x1="232.40384615384616" y1="181.96147230599723" x2="232.41384615384615" y2="181.96147230599723" class="ct-point" ct:value="17.34580578911028"></line>
                                            <line x1="237.6153846153846" y1="183.82586632150412" x2="237.6253846153846" y2="183.82586632150412" class="ct-point" ct:value="16.422838454700937"></line>
                                            <line x1="242.8269230769231" y1="184.78457069076657" x2="242.83692307692309" y2="184.78457069076657" class="ct-point" ct:value="15.94823233130368"></line>
                                            <line x1="248.03846153846155" y1="208.8391577427659" x2="248.04846153846154" y2="208.8391577427659" class="ct-point" ct:value="4.040020919422826"></line>
                                            <line x1="253.25" y1="23.388019268893572" x2="253.26" y2="23.388019268893572" class="ct-point" ct:value="95.84751521341902"></line>
                                            <line x1="258.46153846153845" y1="191.0673955766888" x2="258.47153846153844" y2="191.0673955766888" class="ct-point" ct:value="12.837922981837224"></line>
                                            <line x1="263.6730769230769" y1="102.7475590220247" x2="263.6830769230769" y2="102.7475590220247" class="ct-point" ct:value="56.56061434553232"></line>
                                            <line x1="268.88461538461536" y1="165.9702565474292" x2="268.89461538461535" y2="165.9702565474292" class="ct-point" ct:value="25.262249233945944"></line>
                                            <line x1="274.0961538461538" y1="123.4124481244842" x2="274.1061538461538" y2="123.4124481244842" class="ct-point" ct:value="46.330471225502876"></line>
                                            <line x1="279.3076923076923" y1="30.96315971362813" x2="279.3176923076923" y2="30.96315971362813" class="ct-point" ct:value="92.09744568632271"></line>
                                            <line x1="284.5192307692308" y1="64.74078203441584" x2="284.52923076923076" y2="64.74078203441584" class="ct-point" ct:value="75.37585047801196"></line>
                                            <line x1="289.7307692307692" y1="83.50525872038219" x2="289.7407692307692" y2="83.50525872038219" class="ct-point" ct:value="66.08650558396921"></line>
                                            <line x1="294.94230769230774" y1="118.24328270265323" x2="294.9523076923077" y2="118.24328270265323" class="ct-point" ct:value="48.88946400858751"></line>
                                            <line x1="300.1538461538462" y1="101.57158395445485" x2="300.1638461538462" y2="101.57158395445485" class="ct-point" ct:value="57.142780220566905"></line>
                                            <line x1="305.36538461538464" y1="156.4569124645246" x2="305.37538461538463" y2="156.4569124645246" class="ct-point" ct:value="29.971825512611584"></line>
                                            <line x1="310.5769230769231" y1="182.90579522580987" x2="310.5869230769231" y2="182.90579522580987" class="ct-point" ct:value="16.878319195143632"></line>
                                            <line x1="315.78846153846155" y1="173.0610104409369" x2="315.79846153846154" y2="173.0610104409369" class="ct-point" ct:value="21.751975029239155"></line>
                                        </g>
                                        <g class="ct-series ct-series-c">
                                            <line x1="50" y1="138.99553059737417" x2="50.01" y2="138.99553059737417" class="ct-point" ct:value="38.61607396169596"></line>
                                            <line x1="55.21153846153846" y1="88.96296712257117" x2="55.22153846153846" y2="88.96296712257117" class="ct-point" ct:value="63.3846697413014"></line>
                                            <line x1="60.42307692307692" y1="96.14172986371496" x2="60.43307692307692" y2="96.14172986371496" class="ct-point" ct:value="59.83082680014111"></line>
                                            <line x1="65.63461538461539" y1="82.37151028522737" x2="65.64461538461539" y2="82.37151028522737" class="ct-point" ct:value="66.64776718553101"></line>
                                            <line x1="70.84615384615384" y1="184.42630964679697" x2="70.85615384615384" y2="184.42630964679697" class="ct-point" ct:value="16.125589283763876"></line>
                                            <line x1="76.0576923076923" y1="61.60258887636965" x2="76.06769230769231" y2="61.60258887636965" class="ct-point" ct:value="76.92941144734175"></line>
                                            <line x1="81.26923076923077" y1="212.345513826246" x2="81.27923076923078" y2="212.345513826246" class="ct-point" ct:value="2.3042010761158527"></line>
                                            <line x1="86.48076923076923" y1="77.78795473646696" x2="86.49076923076923" y2="77.78795473646696" class="ct-point" ct:value="68.91685409085794"></line>
                                            <line x1="91.6923076923077" y1="205.40148288307327" x2="91.7023076923077" y2="205.40148288307327" class="ct-point" ct:value="5.741840156894417"></line>
                                            <line x1="96.90384615384616" y1="23.923372366468698" x2="96.91384615384617" y2="23.923372366468698" class="ct-point" ct:value="95.58248892749074"></line>
                                            <line x1="102.11538461538461" y1="195.29695052920107" x2="102.12538461538462" y2="195.29695052920107" class="ct-point" ct:value="10.74408389643512"></line>
                                            <line x1="107.32692307692308" y1="206.02451070326242" x2="107.33692307692309" y2="206.02451070326242" class="ct-point" ct:value="5.433410542939399"></line>
                                            <line x1="112.53846153846155" y1="154.96904462019685" x2="112.54846153846155" y2="154.96904462019685" class="ct-point" ct:value="30.708393752377795"></line>
                                            <line x1="117.75" y1="37.04764830185775" x2="117.76" y2="37.04764830185775" class="ct-point" ct:value="89.08532262284271"></line>
                                            <line x1="122.96153846153847" y1="139.6129063361505" x2="122.97153846153847" y2="139.6129063361505" class="ct-point" ct:value="38.31044240784628"></line>
                                            <line x1="128.1730769230769" y1="108.70518843915508" x2="128.1830769230769" y2="108.70518843915508" class="ct-point" ct:value="53.61129285190343"></line>
                                            <line x1="133.3846153846154" y1="202.10356342944092" x2="133.39461538461538" y2="202.10356342944092" class="ct-point" ct:value="7.374473549781724"></line>
                                            <line x1="138.59615384615387" y1="158.59683300952366" x2="138.60615384615386" y2="158.59683300952366" class="ct-point" ct:value="28.912458906176408"></line>
                                            <line x1="143.80769230769232" y1="54.201777359888155" x2="143.8176923076923" y2="54.201777359888155" class="ct-point" ct:value="80.59317952480785"></line>
                                            <line x1="149.01923076923077" y1="41.25283897482055" x2="149.02923076923076" y2="41.25283897482055" class="ct-point" ct:value="87.00354506197003"></line>
                                            <line x1="154.23076923076923" y1="169.95925974850735" x2="154.24076923076922" y2="169.95925974850735" class="ct-point" ct:value="23.287495174006267"></line>
                                            <line x1="159.44230769230768" y1="117.06417508717777" x2="159.45230769230767" y2="117.06417508717777" class="ct-point" ct:value="49.473180649911995"></line>
                                            <line x1="164.65384615384616" y1="114.27189798001919" x2="164.66384615384615" y2="114.27189798001919" class="ct-point" ct:value="50.85549604949545"></line>
                                            <line x1="169.8653846153846" y1="191.40748838651515" x2="169.8753846153846" y2="191.40748838651515" class="ct-point" ct:value="12.669560204695463"></line>
                                            <line x1="175.0769230769231" y1="169.09743284102905" x2="175.08692307692309" y2="169.09743284102905" class="ct-point" ct:value="23.714142157906416"></line>
                                            <line x1="180.28846153846155" y1="130.583139177498" x2="180.29846153846154" y2="130.583139177498" class="ct-point" ct:value="42.780624169555445"></line>
                                            <line x1="185.5" y1="27.085219888388906" x2="185.51" y2="27.085219888388906" class="ct-point" ct:value="94.0172178770352"></line>
                                            <line x1="190.71153846153845" y1="143.24144651960881" x2="190.72153846153844" y2="143.24144651960881" class="ct-point" ct:value="36.51413538633227"></line>
                                            <line x1="195.92307692307693" y1="19.015588772304937" x2="195.93307692307692" y2="19.015588772304937" class="ct-point" ct:value="98.01208476618567"></line>
                                            <line x1="201.1346153846154" y1="174.12860988589583" x2="201.14461538461538" y2="174.12860988589583" class="ct-point" ct:value="21.223460452526822"></line>
                                            <line x1="206.34615384615384" y1="200.48358087941435" x2="206.35615384615383" y2="200.48358087941435" class="ct-point" ct:value="8.176445109200813"></line>
                                            <line x1="211.55769230769232" y1="58.1515682820673" x2="211.5676923076923" y2="58.1515682820673" class="ct-point" ct:value="78.6378374841251"></line>
                                            <line x1="216.76923076923077" y1="67.38461605642445" x2="216.77923076923076" y2="67.38461605642445" class="ct-point" ct:value="74.06702175424533"></line>
                                            <line x1="221.98076923076923" y1="179.0191071556602" x2="221.99076923076922" y2="179.0191071556602" class="ct-point" ct:value="18.802422200168213"></line>
                                            <line x1="227.1923076923077" y1="92.5345351298959" x2="227.2023076923077" y2="92.5345351298959" class="ct-point" ct:value="61.616566767378266"></line>
                                            <line x1="232.40384615384616" y1="72.36269068108564" x2="232.41384615384615" y2="72.36269068108564" class="ct-point" ct:value="71.60262837570018"></line>
                                            <line x1="237.6153846153846" y1="183.24308237024883" x2="237.6253846153846" y2="183.24308237024883" class="ct-point" ct:value="16.711345361262964"></line>
                                            <line x1="242.8269230769231" y1="212.43507771234945" x2="242.83692307692309" y2="212.43507771234945" class="ct-point" ct:value="2.2598625186388777"></line>
                                            <line x1="248.03846153846155" y1="27.423122854214938" x2="248.04846153846154" y2="27.423122854214938" class="ct-point" ct:value="93.84993918108172"></line>
                                            <line x1="253.25" y1="145.7910382428332" x2="253.26" y2="145.7910382428332" class="ct-point" ct:value="35.25196126592416"></line>
                                            <line x1="258.46153846153845" y1="107.89703960291341" x2="258.47153846153844" y2="107.89703960291341" class="ct-point" ct:value="54.01136653321118"></line>
                                            <line x1="263.6730769230769" y1="82.06559818447639" x2="263.6830769230769" y2="82.06559818447639" class="ct-point" ct:value="66.79920881956615"></line>
                                            <line x1="268.88461538461536" y1="39.596620863815474" x2="268.89461538461535" y2="39.596620863815474" class="ct-point" ct:value="87.82345501791313"></line>
                                            <line x1="274.0961538461538" y1="181.7117766549113" x2="274.1061538461538" y2="181.7117766549113" class="ct-point" ct:value="17.469417497568664"></line>
                                            <line x1="279.3076923076923" y1="65.03834270042069" x2="279.3176923076923" y2="65.03834270042069" class="ct-point" ct:value="75.22854321761352"></line>
                                            <line x1="284.5192307692308" y1="183.07839044168188" x2="284.52923076923076" y2="183.07839044168188" class="ct-point" ct:value="16.792876018969373"></line>
                                            <line x1="289.7307692307692" y1="168.7894352215235" x2="289.7407692307692" y2="168.7894352215235" class="ct-point" ct:value="23.866616226968574"></line>
                                            <line x1="294.94230769230774" y1="91.1838501326119" x2="294.9523076923077" y2="91.1838501326119" class="ct-point" ct:value="62.28522270662778"></line>
                                            <line x1="300.1538461538462" y1="127.67567644004092" x2="300.1638461538462" y2="127.67567644004092" class="ct-point" ct:value="44.21996215839559"></line>
                                            <line x1="305.36538461538464" y1="164.7096706087179" x2="305.37538461538463" y2="164.7096706087179" class="ct-point" ct:value="25.88630167885254"></line>
                                            <line x1="310.5769230769231" y1="94.6328178006772" x2="310.5869230769231" y2="94.6328178006772" class="ct-point" ct:value="60.57781296996178"></line>
                                            <line x1="315.78846153846155" y1="156.97936729977908" x2="315.79846153846154" y2="156.97936729977908" class="ct-point" ct:value="29.713184505059854"></line>
                                        </g>
                                        <g class="ct-series ct-series-d">
                                            <line x1="50" y1="138.28881716216563" x2="50.01" y2="138.28881716216563" class="ct-point" ct:value="38.9659320979378"></line>
                                            <line x1="55.21153846153846" y1="118.96088409333191" x2="55.22153846153846" y2="118.96088409333191" class="ct-point" ct:value="48.53421579538024"></line>
                                            <line x1="60.42307692307692" y1="145.39565864062237" x2="60.43307692307692" y2="145.39565864062237" class="ct-point" ct:value="35.44769374226615"></line>
                                            <line x1="65.63461538461539" y1="200.6267033966192" x2="65.64461538461539" y2="200.6267033966192" class="ct-point" ct:value="8.105592377911286"></line>
                                            <line x1="70.84615384615384" y1="57.67708715106764" x2="70.85615384615384" y2="57.67708715106764" class="ct-point" ct:value="78.87272913313484"></line>
                                            <line x1="76.0576923076923" y1="113.76314889020044" x2="76.06769230769231" y2="113.76314889020044" class="ct-point" ct:value="51.10735203455423"></line>
                                            <line x1="81.26923076923077" y1="22.397270449167905" x2="81.27923076923078" y2="22.397270449167905" class="ct-point" ct:value="96.33798492615449"></line>
                                            <line x1="86.48076923076923" y1="198.352292753816" x2="86.49076923076923" y2="198.352292753816" class="ct-point" ct:value="9.231538240685156"></line>
                                            <line x1="91.6923076923077" y1="163.6595021926375" x2="91.7023076923077" y2="163.6595021926375" class="ct-point" ct:value="26.406187033347784"></line>
                                            <line x1="96.90384615384616" y1="77.92958858271203" x2="96.91384615384617" y2="77.92958858271203" class="ct-point" ct:value="68.84673832539008"></line>
                                            <line x1="102.11538461538461" y1="41.63248257994968" x2="102.12538461538462" y2="41.63248257994968" class="ct-point" ct:value="86.81560268319323"></line>
                                            <line x1="107.32692307692308" y1="22.891697610227567" x2="107.33692307692309" y2="22.891697610227567" class="ct-point" ct:value="96.09321900483783"></line>
                                            <line x1="112.53846153846155" y1="209.96280896654181" x2="112.54846153846155" y2="209.96280896654181" class="ct-point" ct:value="3.483757937355536"></line>
                                            <line x1="117.75" y1="166.71108373607817" x2="117.76" y2="166.71108373607817" class="ct-point" ct:value="24.895503100951398"></line>
                                            <line x1="122.96153846153847" y1="187.18739205457632" x2="122.97153846153847" y2="187.18739205457632" class="ct-point" ct:value="14.758716804665195"></line>
                                            <line x1="128.1730769230769" y1="151.54725852467874" x2="128.1830769230769" y2="151.54725852467874" class="ct-point" ct:value="32.40234726501053"></line>
                                            <line x1="133.3846153846154" y1="216.2564015682053" x2="133.39461538461538" y2="216.2564015682053" class="ct-point" ct:value="0.3681180355419311"></line>
                                            <line x1="138.59615384615387" y1="33.79545869692731" x2="138.60615384615386" y2="33.79545869692731" class="ct-point" ct:value="90.69531747676865"></line>
                                            <line x1="143.80769230769232" y1="189.66798612103563" x2="143.8176923076923" y2="189.66798612103563" class="ct-point" ct:value="13.53069994008137"></line>
                                            <line x1="149.01923076923077" y1="201.99817522162672" x2="149.02923076923076" y2="201.99817522162672" class="ct-point" ct:value="7.426645929887754"></line>
                                            <line x1="154.23076923076923" y1="128.0614197598524" x2="154.24076923076922" y2="128.0614197598524" class="ct-point" ct:value="44.02900011888495"></line>
                                            <line x1="159.44230769230768" y1="40.12214802224534" x2="159.45230769230767" y2="40.12214802224534" class="ct-point" ct:value="87.56329305829439"></line>
                                            <line x1="164.65384615384616" y1="53.382324701613896" x2="164.66384615384615" y2="53.382324701613896" class="ct-point" ct:value="80.99884915761689"></line>
                                            <line x1="169.8653846153846" y1="51.65261075491833" x2="169.8753846153846" y2="51.65261075491833" class="ct-point" ct:value="81.8551431906345"></line>
                                            <line x1="175.0769230769231" y1="169.90828400443758" x2="175.08692307692309" y2="169.90828400443758" class="ct-point" ct:value="23.312730690872485"></line>
                                            <line x1="180.28846153846155" y1="122.39935359586943" x2="180.29846153846154" y2="122.39935359586943" class="ct-point" ct:value="46.832003170361666"></line>
                                            <line x1="185.5" y1="78.06464216035457" x2="185.51" y2="78.06464216035457" class="ct-point" ct:value="68.77988011863636"></line>
                                            <line x1="190.71153846153845" y1="109.28876995880066" x2="190.72153846153844" y2="109.28876995880066" class="ct-point" ct:value="53.32239110950463"></line>
                                            <line x1="195.92307692307693" y1="58.40798926733689" x2="195.93307692307692" y2="58.40798926733689" class="ct-point" ct:value="78.51089640230848"></line>
                                            <line x1="201.1346153846154" y1="214.99608346335276" x2="201.14461538461538" y2="214.99608346335276" class="ct-point" ct:value="0.9920378894293203"></line>
                                            <line x1="206.34615384615384" y1="132.3711986184509" x2="206.35615384615383" y2="132.3711986184509" class="ct-point" ct:value="41.895446228489654"></line>
                                            <line x1="211.55769230769232" y1="143.9259787334616" x2="211.5676923076923" y2="143.9259787334616" class="ct-point" ct:value="36.17525805274179"></line>
                                            <line x1="216.76923076923077" y1="62.24305717127413" x2="216.77923076923076" y2="62.24305717127413" class="ct-point" ct:value="76.6123479350128"></line>
                                            <line x1="221.98076923076923" y1="115.12042909334889" x2="221.99076923076922" y2="115.12042909334889" class="ct-point" ct:value="50.43543114190649"></line>
                                            <line x1="227.1923076923077" y1="57.835282985566664" x2="227.2023076923077" y2="57.835282985566664" class="ct-point" ct:value="78.79441436358086"></line>
                                            <line x1="232.40384615384616" y1="125.97090930316647" x2="232.41384615384615" y2="125.97090930316647" class="ct-point" ct:value="45.06390628556115"></line>
                                            <line x1="237.6153846153846" y1="109.99248995232121" x2="237.6253846153846" y2="109.99248995232121" class="ct-point" ct:value="52.97401487508851"></line>
                                            <line x1="242.8269230769231" y1="190.4201863608467" x2="242.83692307692309" y2="190.4201863608467" class="ct-point" ct:value="13.15832358373925"></line>
                                            <line x1="248.03846153846155" y1="138.97445274469442" x2="248.04846153846154" y2="138.97445274469442" class="ct-point" ct:value="38.62650854223049"></line>
                                            <line x1="253.25" y1="40.657111771910564" x2="253.26" y2="40.657111771910564" class="ct-point" ct:value="87.29845951885615"></line>
                                            <line x1="258.46153846153845" y1="151.191324648653" x2="258.47153846153844" y2="151.191324648653" class="ct-point" ct:value="32.57855215413219"></line>
                                            <line x1="263.6730769230769" y1="49.62826416861947" x2="263.6830769230769" y2="49.62826416861947" class="ct-point" ct:value="82.85729496602997"></line>
                                            <line x1="268.88461538461536" y1="103.54563492583209" x2="268.89461538461535" y2="103.54563492583209" class="ct-point" ct:value="56.16552726443956"></line>
                                            <line x1="274.0961538461538" y1="51.432496315422554" x2="274.1061538461538" y2="51.432496315422554" class="ct-point" ct:value="81.96411073493934"></line>
                                            <line x1="279.3076923076923" y1="90.98274552019365" x2="279.3176923076923" y2="90.98274552019365" class="ct-point" ct:value="62.38477944544869"></line>
                                            <line x1="284.5192307692308" y1="56.574206733274224" x2="284.52923076923076" y2="56.574206733274224" class="ct-point" ct:value="79.41870953798306"></line>
                                            <line x1="289.7307692307692" y1="72.15472662672934" x2="289.7407692307692" y2="72.15472662672934" class="ct-point" ct:value="71.70558087785676"></line>
                                            <line x1="294.94230769230774" y1="83.8235701511096" x2="294.9523076923077" y2="83.8235701511096" class="ct-point" ct:value="65.92892566776753"></line>
                                            <line x1="300.1538461538462" y1="178.20121946341905" x2="300.1638461538462" y2="178.20121946341905" class="ct-point" ct:value="19.2073170973173"></line>
                                            <line x1="305.36538461538464" y1="216.93857816913697" x2="305.37538461538463" y2="216.93857816913697" class="ct-point" ct:value="0.03040684696189455"></line>
                                            <line x1="310.5769230769231" y1="97.30205277777597" x2="310.5869230769231" y2="97.30205277777597" class="ct-point" ct:value="59.25640951595249"></line>
                                            <line x1="315.78846153846155" y1="131.242279826043" x2="315.79846153846154" y2="131.242279826043" class="ct-point" ct:value="42.454316917800504"></line>
                                        </g>
                                    </g>
                                    <g class="ct-labels">
                                        <foreignObject style="overflow: visible;" x="50" y="222" width="5.211538461538462" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 5px; height: 20px;">W1</span></foreignObject>
                                        <foreignObject style="overflow: visible;" x="70.84615384615384" y="222" width="5.21153846153846" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 5px; height: 20px;">W5</span></foreignObject>
                                        <foreignObject style="overflow: visible;" x="91.6923076923077" y="222" width="5.21153846153846" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 5px; height: 20px;">W9</span></foreignObject>
                                        <foreignObject style="overflow: visible;" x="112.53846153846155" y="222" width="5.21153846153846" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 5px; height: 20px;">W13</span></foreignObject>
                                        <foreignObject style="overflow: visible;" x="133.3846153846154" y="222" width="5.211538461538467" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 5px; height: 20px;">W17</span></foreignObject>
                                        <foreignObject style="overflow: visible;" x="154.23076923076923" y="222" width="5.211538461538467" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 5px; height: 20px;">W21</span></foreignObject>
                                        <foreignObject style="overflow: visible;" x="175.0769230769231" y="222" width="5.211538461538467" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 5px; height: 20px;">W25</span></foreignObject>
                                        <foreignObject style="overflow: visible;" x="195.92307692307693" y="222" width="5.211538461538453" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 5px; height: 20px;">W29</span></foreignObject>
                                        <foreignObject style="overflow: visible;" x="216.76923076923077" y="222" width="5.211538461538453" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 5px; height: 20px;">W33</span></foreignObject>
                                        <foreignObject style="overflow: visible;" x="237.6153846153846" y="222" width="5.211538461538481" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 5px; height: 20px;">W37</span></foreignObject>
                                        <foreignObject style="overflow: visible;" x="258.46153846153845" y="222" width="5.211538461538481" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 5px; height: 20px;">W41</span></foreignObject>
                                        <foreignObject style="overflow: visible;" x="279.3076923076923" y="222" width="5.211538461538453" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 5px; height: 20px;">W45</span></foreignObject>
                                        <foreignObject style="overflow: visible;" x="300.1538461538462" y="222" width="5.211538461538453" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 5px; height: 20px;">W49</span></foreignObject>
                                        <foreignObject style="overflow: visible;" y="196.8" x="10" height="20.2" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 20px; width: 30px;">0</span></foreignObject>
                                        <foreignObject style="overflow: visible;" y="176.60000000000002" x="10" height="20.2" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 20px; width: 30px;">10</span></foreignObject>
                                        <foreignObject style="overflow: visible;" y="156.39999999999998" x="10" height="20.200000000000003" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 20px; width: 30px;">20</span></foreignObject>
                                        <foreignObject style="overflow: visible;" y="136.20000000000002" x="10" height="20.199999999999996" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 20px; width: 30px;">30</span></foreignObject>
                                        <foreignObject style="overflow: visible;" y="115.99999999999999" x="10" height="20.200000000000003" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 20px; width: 30px;">40</span></foreignObject>
                                        <foreignObject style="overflow: visible;" y="95.8" x="10" height="20.200000000000003" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 20px; width: 30px;">50</span></foreignObject>
                                        <foreignObject style="overflow: visible;" y="75.6" x="10" height="20.200000000000003" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 20px; width: 30px;">60</span></foreignObject>
                                        <foreignObject style="overflow: visible;" y="55.400000000000006" x="10" height="20.19999999999999" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 20px; width: 30px;">70</span></foreignObject>
                                        <foreignObject style="overflow: visible;" y="35.19999999999999" x="10" height="20.200000000000017" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 20px; width: 30px;">80</span></foreignObject>
                                        <foreignObject style="overflow: visible;" y="15" x="10" height="20.19999999999999" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 20px; width: 30px;">90</span></foreignObject>
                                        <foreignObject style="overflow: visible;" y="-15" x="10" height="30" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 30px;">100</span></foreignObject>
                                    </g>
                                </svg></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Stacked bar chart</h4>
                            <div class="ct-chart ct-perfect-fourth" id="ct-chart-stacked-bar"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-bar" style="width: 100%; height: 100%;">
                                    <g class="ct-grids">
                                        <line x1="50" x2="50" y1="15" y2="217" class="ct-grid ct-horizontal"></line>
                                        <line x1="117.75" x2="117.75" y1="15" y2="217" class="ct-grid ct-horizontal"></line>
                                        <line x1="185.5" x2="185.5" y1="15" y2="217" class="ct-grid ct-horizontal"></line>
                                        <line x1="253.25" x2="253.25" y1="15" y2="217" class="ct-grid ct-horizontal"></line>
                                        <line y1="217" y2="217" x1="50" x2="321" class="ct-grid ct-vertical"></line>
                                        <line y1="176.6" y2="176.6" x1="50" x2="321" class="ct-grid ct-vertical"></line>
                                        <line y1="136.2" y2="136.2" x1="50" x2="321" class="ct-grid ct-vertical"></line>
                                        <line y1="95.8" y2="95.8" x1="50" x2="321" class="ct-grid ct-vertical"></line>
                                        <line y1="55.400000000000006" y2="55.400000000000006" x1="50" x2="321" class="ct-grid ct-vertical"></line>
                                        <line y1="15" y2="15" x1="50" x2="321" class="ct-grid ct-vertical"></line>
                                    </g>
                                    <g>
                                        <g class="ct-series ct-series-a">
                                            <line x1="83.875" x2="83.875" y1="217" y2="152.36" class="ct-bar" ct:value="800000" style="stroke-width: 30px"></line>
                                            <line x1="151.625" x2="151.625" y1="217" y2="120.04" class="ct-bar" ct:value="1200000" style="stroke-width: 30px"></line>
                                            <line x1="219.375" x2="219.375" y1="217" y2="103.88" class="ct-bar" ct:value="1400000" style="stroke-width: 30px"></line>
                                            <line x1="287.125" x2="287.125" y1="217" y2="111.96" class="ct-bar" ct:value="1300000" style="stroke-width: 30px"></line>
                                        </g>
                                        <g class="ct-series ct-series-b">
                                            <line x1="83.875" x2="83.875" y1="152.36" y2="136.20000000000002" class="ct-bar" ct:value="200000" style="stroke-width: 30px"></line>
                                            <line x1="151.625" x2="151.625" y1="120.04" y2="87.72000000000001" class="ct-bar" ct:value="400000" style="stroke-width: 30px"></line>
                                            <line x1="219.375" x2="219.375" y1="103.88" y2="63.47999999999999" class="ct-bar" ct:value="500000" style="stroke-width: 30px"></line>
                                            <line x1="287.125" x2="287.125" y1="111.96" y2="87.71999999999998" class="ct-bar" ct:value="300000" style="stroke-width: 30px"></line>
                                        </g>
                                        <g class="ct-series ct-series-c">
                                            <line x1="83.875" x2="83.875" y1="136.20000000000002" y2="128.12" class="ct-bar" ct:value="100000" style="stroke-width: 30px"></line>
                                            <line x1="151.625" x2="151.625" y1="87.72000000000001" y2="71.56000000000002" class="ct-bar" ct:value="200000" style="stroke-width: 30px"></line>
                                            <line x1="219.375" x2="219.375" y1="63.47999999999999" y2="31.159999999999997" class="ct-bar" ct:value="400000" style="stroke-width: 30px"></line>
                                            <line x1="287.125" x2="287.125" y1="87.71999999999998" y2="39.239999999999995" class="ct-bar" ct:value="600000" style="stroke-width: 30px"></line>
                                        </g>
                                        <g class="ct-series ct-series-d">
                                            <line x1="83.875" x2="83.875" y1="128.12" y2="95.80000000000001" class="ct-bar" ct:value="400000" style="stroke-width: 30px"></line>
                                            <line x1="151.625" x2="151.625" y1="71.56000000000002" y2="23.080000000000027" class="ct-bar" ct:value="600000" style="stroke-width: 30px"></line>
                                            <line x1="219.375" x2="219.375" y1="31.159999999999997" y2="15" class="ct-bar" ct:value="200000" style="stroke-width: 30px"></line>
                                            <line x1="287.125" x2="287.125" y1="39.239999999999995" y2="39.239999999999995" class="ct-bar" ct:value="0" style="stroke-width: 30px"></line>
                                        </g>
                                    </g>
                                    <g class="ct-labels">
                                        <foreignObject style="overflow: visible;" x="50" y="222" width="67.75" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 68px; height: 20px;">Q1</span></foreignObject>
                                        <foreignObject style="overflow: visible;" x="117.75" y="222" width="67.75" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 68px; height: 20px;">Q2</span></foreignObject>
                                        <foreignObject style="overflow: visible;" x="185.5" y="222" width="67.75" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 68px; height: 20px;">Q3</span></foreignObject>
                                        <foreignObject style="overflow: visible;" x="253.25" y="222" width="67.75" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 68px; height: 20px;">Q4</span></foreignObject>
                                        <foreignObject style="overflow: visible;" y="176.6" x="10" height="40.4" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 40px; width: 30px;">0k</span></foreignObject>
                                        <foreignObject style="overflow: visible;" y="136.2" x="10" height="40.4" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 40px; width: 30px;">500k</span></foreignObject>
                                        <foreignObject style="overflow: visible;" y="95.79999999999998" x="10" height="40.400000000000006" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 40px; width: 30px;">1000k</span></foreignObject>
                                        <foreignObject style="overflow: visible;" y="55.400000000000006" x="10" height="40.39999999999999" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 40px; width: 30px;">1500k</span></foreignObject>
                                        <foreignObject style="overflow: visible;" y="15" x="10" height="40.400000000000006" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 40px; width: 30px;">2000k</span></foreignObject>
                                        <foreignObject style="overflow: visible;" y="-15" x="10" height="30" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 30px;">2500k</span></foreignObject>
                                    </g>
                                </svg></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Horizontal bar chart</h4>
                            <div class="ct-chart ct-perfect-fourth" id="ct-chart-horizontal-bar"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-bar ct-horizontal-bars" style="width: 100%; height: 100%;">
                                    <g class="ct-grids">
                                        <line y1="217" y2="217" x1="30" x2="321" class="ct-grid ct-vertical"></line>
                                        <line y1="188.14285714285714" y2="188.14285714285714" x1="30" x2="321" class="ct-grid ct-vertical"></line>
                                        <line y1="159.28571428571428" y2="159.28571428571428" x1="30" x2="321" class="ct-grid ct-vertical"></line>
                                        <line y1="130.42857142857144" y2="130.42857142857144" x1="30" x2="321" class="ct-grid ct-vertical"></line>
                                        <line y1="101.57142857142857" y2="101.57142857142857" x1="30" x2="321" class="ct-grid ct-vertical"></line>
                                        <line y1="72.71428571428572" y2="72.71428571428572" x1="30" x2="321" class="ct-grid ct-vertical"></line>
                                        <line y1="43.85714285714286" y2="43.85714285714286" x1="30" x2="321" class="ct-grid ct-vertical"></line>
                                        <line x1="30" x2="30" y1="15" y2="217" class="ct-grid ct-horizontal"></line>
                                        <line x1="66.375" x2="66.375" y1="15" y2="217" class="ct-grid ct-horizontal"></line>
                                        <line x1="102.75" x2="102.75" y1="15" y2="217" class="ct-grid ct-horizontal"></line>
                                        <line x1="139.125" x2="139.125" y1="15" y2="217" class="ct-grid ct-horizontal"></line>
                                        <line x1="175.5" x2="175.5" y1="15" y2="217" class="ct-grid ct-horizontal"></line>
                                        <line x1="211.875" x2="211.875" y1="15" y2="217" class="ct-grid ct-horizontal"></line>
                                        <line x1="248.25" x2="248.25" y1="15" y2="217" class="ct-grid ct-horizontal"></line>
                                        <line x1="284.625" x2="284.625" y1="15" y2="217" class="ct-grid ct-horizontal"></line>
                                        <line x1="321" x2="321" y1="15" y2="217" class="ct-grid ct-horizontal"></line>
                                    </g>
                                    <g>
                                        <g class="ct-series ct-series-a">
                                            <line y1="217" y2="217" x1="30" x2="306.45" class="ct-bar" ct:value="19"></line>
                                            <line y1="188.71428571428572" y2="188.71428571428572" x1="30" x2="102.75" class="ct-bar" ct:value="5"></line>
                                            <line y1="159.85714285714286" y2="159.85714285714286" x1="30" x2="73.65" class="ct-bar" ct:value="3"></line>
                                            <line y1="131" y2="131" x1="30" x2="44.55" class="ct-bar" ct:value="1"></line>
                                            <line y1="102.14285714285714" y2="102.14285714285714" x1="30" x2="131.85" class="ct-bar" ct:value="7"></line>
                                            <line y1="73.28571428571429" y2="73.28571428571429" x1="30" x2="117.3" class="ct-bar" ct:value="6"></line>
                                            <line y1="44.42857142857143" y2="44.42857142857143" x1="30" x2="59.1" class="ct-bar" ct:value="2"></line>
                                        </g>
                                        <g class="ct-series ct-series-b">
                                            <line y1="207.57142857142858" y2="207.57142857142858" x1="30" x2="160.95" class="ct-bar" ct:value="9"></line>
                                            <line y1="178.71428571428572" y2="178.71428571428572" x1="30" x2="102.75" class="ct-bar" ct:value="5"></line>
                                            <line y1="149.85714285714286" y2="149.85714285714286" x1="30" x2="73.65" class="ct-bar" ct:value="3"></line>
                                            <line y1="121.00000000000001" y2="121.00000000000001" x1="30" x2="44.55" class="ct-bar" ct:value="1"></line>
                                            <line y1="92.14285714285714" y2="92.14285714285714" x1="30" x2="131.85" class="ct-bar" ct:value="7"></line>
                                            <line y1="63.28571428571429" y2="63.28571428571429" x1="30" x2="117.3" class="ct-bar" ct:value="6"></line>
                                            <line y1="34.42857142857143" y2="34.42857142857143" x1="30" x2="59.1" class="ct-bar" ct:value="2"></line>
                                        </g>
                                        <g class="ct-series ct-series-c">
                                            <line y1="197.57142857142858" y2="197.57142857142858" x1="30" x2="88.2" class="ct-bar" ct:value="4"></line>
                                            <line y1="168.71428571428572" y2="168.71428571428572" x1="30" x2="117.3" class="ct-bar" ct:value="6"></line>
                                            <line y1="139.85714285714286" y2="139.85714285714286" x1="30" x2="88.2" class="ct-bar" ct:value="4"></line>
                                            <line y1="111.00000000000001" y2="111.00000000000001" x1="30" x2="102.75" class="ct-bar" ct:value="5"></line>
                                            <line y1="82.14285714285714" y2="82.14285714285714" x1="30" x2="160.95" class="ct-bar" ct:value="9"></line>
                                            <line y1="53.28571428571429" y2="53.28571428571429" x1="30" x2="59.1" class="ct-bar" ct:value="2"></line>
                                            <line y1="24.42857142857143" y2="24.42857142857143" x1="30" x2="73.65" class="ct-bar" ct:value="3"></line>
                                        </g>
                                        <g class="ct-series ct-series-d">
                                            <line y1="187.57142857142858" y2="187.57142857142858" x1="30" x2="73.65" class="ct-bar" ct:value="3"></line>
                                            <line y1="158.71428571428572" y2="158.71428571428572" x1="30" x2="175.5" class="ct-bar" ct:value="10"></line>
                                            <line y1="129.85714285714286" y2="129.85714285714286" x1="30" x2="102.75" class="ct-bar" ct:value="5"></line>
                                            <line y1="101.00000000000001" y2="101.00000000000001" x1="30" x2="131.85" class="ct-bar" ct:value="7"></line>
                                            <line y1="72.14285714285714" y2="72.14285714285714" x1="30" x2="73.65" class="ct-bar" ct:value="3"></line>
                                            <line y1="43.28571428571429" y2="43.28571428571429" x1="30" x2="88.2" class="ct-bar" ct:value="4"></line>
                                            <line y1="15" y2="15" x1="30" x2="102.75" class="ct-bar" ct:value="5"></line>
                                        </g>
                                    </g>
                                    <g class="ct-labels">
                                        <foreignObject style="overflow: visible;" y="188.14285714285714" x="10" height="28.857142857142858" width="10"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 29px; width: 10px;">Sunday</span></foreignObject>
                                        <foreignObject style="overflow: visible;" y="159.28571428571428" x="10" height="28.857142857142858" width="10"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 29px; width: 10px;">Saturday</span></foreignObject>
                                        <foreignObject style="overflow: visible;" y="130.42857142857142" x="10" height="28.857142857142854" width="10"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 29px; width: 10px;">Friday</span></foreignObject>
                                        <foreignObject style="overflow: visible;" y="101.57142857142858" x="10" height="28.85714285714286" width="10"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 29px; width: 10px;">Thursday</span></foreignObject>
                                        <foreignObject style="overflow: visible;" y="72.71428571428572" x="10" height="28.857142857142847" width="10"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 29px; width: 10px;">Wednesday</span></foreignObject>
                                        <foreignObject style="overflow: visible;" y="43.85714285714286" x="10" height="28.85714285714286" width="10"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 29px; width: 10px;">Tuesday</span></foreignObject>
                                        <foreignObject style="overflow: visible;" y="13.857142857142861" x="10" height="30" width="10"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 10px;">Monday</span></foreignObject>
                                        <foreignObject style="overflow: visible;" x="30" y="222" width="36.375" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 36px; height: 20px;">0</span></foreignObject>
                                        <foreignObject style="overflow: visible;" x="66.375" y="222" width="36.375" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 36px; height: 20px;">2.5</span></foreignObject>
                                        <foreignObject style="overflow: visible;" x="102.75" y="222" width="36.375" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 36px; height: 20px;">5</span></foreignObject>
                                        <foreignObject style="overflow: visible;" x="139.125" y="222" width="36.375" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 36px; height: 20px;">7.5</span></foreignObject>
                                        <foreignObject style="overflow: visible;" x="175.5" y="222" width="36.375" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 36px; height: 20px;">10</span></foreignObject>
                                        <foreignObject style="overflow: visible;" x="211.875" y="222" width="36.375" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 36px; height: 20px;">12.5</span></foreignObject>
                                        <foreignObject style="overflow: visible;" x="248.25" y="222" width="36.375" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 36px; height: 20px;">15</span></foreignObject>
                                        <foreignObject style="overflow: visible;" x="284.625" y="222" width="36.375" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 36px; height: 20px;">17.5</span></foreignObject>
                                        <foreignObject style="overflow: visible;" x="321" y="222" width="30" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 30px; height: 20px;">20</span></foreignObject>
                                    </g>
                                </svg></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Pie chart</h4>
                            <div class="ct-chart ct-perfect-fourth" id="ct-chart-pie"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-pie" style="width: 100%; height: 100%;">
                                    <g class="ct-series ct-series-a">
                                        <path d="M228.5,230.789A121,121,0,0,0,168,5L168,126Z" class="ct-slice-pie" ct:value="5"></path>
                                    </g>
                                    <g class="ct-series ct-series-b">
                                        <path d="M63.211,186.5A121,121,0,0,0,228.865,230.577L168,126Z" class="ct-slice-pie" ct:value="3"></path>
                                    </g>
                                    <g class="ct-series ct-series-c">
                                        <path d="M168,5A121,121,0,0,0,63.423,186.865L168,126Z" class="ct-slice-pie" ct:value="4"></path>
                                    </g>
                                    <g><text dx="226.43851249048862" dy="110.3414477712975" text-anchor="middle" class="ct-label">5%</text><text dx="152.34144777129748" dy="184.43851249048862" text-anchor="middle" class="ct-label">3%</text><text dx="115.60546307104147" dy="95.75" text-anchor="middle" class="ct-label">4%</text></g>
                                </svg></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Donut</h4>
                            <div class="ct-chart ct-perfect-fourth" id="ct-chart-donut"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-donut" style="width: 100%; height: 100%;">
                                    <g class="ct-series ct-series-a">
                                        <path d="M130.609,10.922A121,121,0,0,0,47,126L107,126A61,61,0,0,1,149.15,67.986Z" class="ct-slice-donut-solid" ct:value="20"></path>
                                    </g>
                                    <g class="ct-series ct-series-b">
                                        <path d="M265.891,197.122A121,121,0,0,0,130.207,11.053L148.948,68.052A61,61,0,0,1,217.35,161.855Z" class="ct-slice-donut-solid" ct:value="40"></path>
                                    </g>
                                    <g class="ct-series ct-series-c">
                                        <path d="M205.391,241.078A121,121,0,0,0,266.139,196.78L217.475,161.682A61,61,0,0,1,186.85,184.014Z" class="ct-slice-donut-solid" ct:value="10"></path>
                                    </g>
                                    <g class="ct-series ct-series-d">
                                        <path d="M47,126A121,121,0,0,0,205.793,240.947L187.052,183.948A61,61,0,0,1,107,126Z" class="ct-slice-donut-solid" ct:value="30"></path>
                                    </g>
                                    <g><text dx="94.37945351187979" dy="72.51154204138496" text-anchor="middle" class="ct-label">safari 20%</text><text dx="241.62054648812023" dy="72.51154204138493" text-anchor="middle" class="ct-label">chrome 40%</text><text dx="221.48845795861513" dy="199.62054648812017" text-anchor="middle" class="ct-label">explorer 10%</text><text dx="114.51154204138496" dy="199.62054648812023" text-anchor="middle" class="ct-label">firefox 30%</text></g>
                                </svg></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
            </div>
        </footer>
        <!-- partial -->
    </div>
</div>
</div>
@endsection