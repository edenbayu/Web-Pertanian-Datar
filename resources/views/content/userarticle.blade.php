@extends('webtanidatar.master')

@section('content')
<main id="main-content" class="my-5 content-container-mobile">
        <div class="container">
            <div class="row">
                <!-- left side -->
                <div class="col-md-3 col-lg-3">
                    <div class="d-flex flex-column left-panel">
                        <h4 class="mb-4">Profil Saya</h4>
                        <div class="d-flex flex-column">
                        <a href="/user/{{ $user->id ?? ''}}/overview" class="text-decoration-none text-dark nav-setting-profile act-cek border-bottom">Overview</a>
                            <a href="/user/{{ $user->id ?? ''}}/listquestion" class="text-decoration-none text-dark nav-setting-profile act-cek border-bottom">Daftar Pertanyaan</a>
                            <a href="/user/{{ $user->id ?? ''}}/listarticle" class="text-decoration-none text-dark nav-setting-profile act-cek border-bottom">Daftar Artikel</a>
                        </div>
                    </div>
                </div>

                <!-- right side detail -->
                <didiv class="col-md-9 col-lg-9 margin-when-mobile">

<!-- ini ilustrasi kalo si user artikelnya kosong -->
<div class="article-illustration">
    <svg class="animated" id="freepik_stories-blog-post" xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 500 500" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
        xmlns:svgjs="http://svgjs.com/svgjs">
        <g id="freepik--background-complete--inject-18" class="animable"
            style="transform-origin: 257.556px 137.898px;">
            <g id="elljm6btut2x8">
                <circle cx="449.45" cy="180.7" r="24.91"
                    style="fill: rgb(235, 235, 235); transform-origin: 449.45px 180.7px; transform: rotate(-2.84deg);"
                    class="animable"></circle>
            </g>
            <g id="freepik--xsrjP0--inject-18" class="animable"
                style="transform-origin: 449.464px 177.88px;">
                <path
                    d="M446.06,190.61c-.66-.41-1.23-1-2.12-.93-.33,0-.26-.25-.26-.43q0-5,0-9.95c0-.25,0-.44.28-.58,2.53-1.27,3.63-3.79,5.18-5.94a9.93,9.93,0,0,0,1.84-7.53c-.1-.74.25-1.08.92-1.23a1.66,1.66,0,0,1,1.89.6,13.47,13.47,0,0,1,1.45,4.34,16.27,16.27,0,0,1-.46,3.73c-.12.91-.33,1.81-.5,2.74.22.16.48.07.72.08h8.4c1.19,0,1.76.34,1.93,1.12a2.25,2.25,0,0,1-1.22,2.43c-.21.11-.59,0-.62.34s.37.3.56.44c1,.69.83,2.13-.35,3-.28.2-.83.11-.84.52s.51.33.74.56a1.9,1.9,0,0,1-.81,2.93,3.7,3.7,0,0,0-.5.19c-.14.09-.27.2,0,.39a1.65,1.65,0,0,1,0,3l-.36.27a2.41,2.41,0,0,1-1.48.32H447.22A1.56,1.56,0,0,1,446.06,190.61Z"
                    style="fill: rgb(255, 255, 255); fill-rule: evenodd; transform-origin: 454.521px 177.481px;"
                    id="elcwr4lvxjndf" class="animable"></path>
                <path
                    d="M433.56,184.76c0-2.11,0-4.22,0-6.33,0-.42,0-.63.57-.63q3.86,0,7.71,0c.51,0,.58.17.58.62,0,4.24,0,8.48,0,12.73,0,.54-.14.69-.68.68q-3.75,0-7.48,0c-.62,0-.71-.21-.7-.76C433.58,189,433.56,186.87,433.56,184.76Z"
                    style="fill: rgb(255, 255, 255); fill-rule: evenodd; transform-origin: 437.99px 184.815px;"
                    id="el01j5e38w6jeq" class="animable"></path>
            </g>
            <path d="M163.39,134.86H49.22V61.66H163.39Zm-113.17-1H162.39V62.66H50.22Z"
                style="fill: rgb(235, 235, 235); transform-origin: 106.305px 98.26px;"
                id="elb2oi6gmiayp" class="animable"></path>
            <path d="M163.39,72.26H49.22V61.66H163.39Zm-113.17-1H162.39v-8.6H50.22Z"
                style="fill: rgb(235, 235, 235); transform-origin: 106.305px 66.96px;"
                id="elz2ib6s6s40m" class="animable"></path>
            <path d="M58.72,67a2.42,2.42,0,1,1-2.41-2.42A2.41,2.41,0,0,1,58.72,67Z"
                style="fill: rgb(199, 199, 199); transform-origin: 56.3px 67px;" id="elmff5v1orjsh"
                class="animable"></path>
            <path d="M68.57,67a2.41,2.41,0,1,1-2.41-2.42A2.41,2.41,0,0,1,68.57,67Z"
                style="fill: rgb(235, 235, 235); transform-origin: 66.16px 66.99px;"
                id="elkvv30cj2m5h" class="animable"></path>
            <circle cx="76.02" cy="67.03" r="2.41"
                style="fill: rgb(25, 135, 84); transform-origin: 76.02px 67.03px;"
                id="elevzyrf47za5" class="animable"></circle>
            <path d="M40.26,224.5a24.91,24.91,0,1,1,30.11,18.29A24.9,24.9,0,0,1,40.26,224.5Z"
                style="fill: rgb(235, 235, 235); transform-origin: 64.4591px 218.593px;"
                id="el7qv0dlm4p9" class="animable"></path>
            <path
                d="M77.17,221.7c-3.76,7.59-12.72,12.09-12.72,12.09s-9-4.5-12.71-12.09c-3.13-6.33-1.15-13.17,3.8-14.67,7.09-2.14,8.91,10.21,8.91,10.21s1.82-12.35,8.92-10.21C78.32,208.53,80.3,215.37,77.17,221.7Z"
                style="fill: rgb(255, 255, 255); transform-origin: 64.455px 220.285px;"
                id="el4360rs059q7" class="animable"></path>
            <path d="M388.09,78.39a25,25,0,0,1-26.2,0,24.91,24.91,0,1,1,26.2,0Z"
                style="fill: rgb(235, 235, 235); transform-origin: 374.99px 57.1949px;"
                id="elp5198fzgfy" class="animable"></path>
            <circle cx="374.99" cy="54.35" r="7.58"
                style="fill: rgb(255, 255, 255); transform-origin: 374.99px 54.35px;"
                id="el8107ysae99o" class="animable"></circle>
            <path d="M388.09,75.26v3.13a25,25,0,0,1-26.2,0V75.26a13.1,13.1,0,1,1,26.2,0Z"
                style="fill: rgb(255, 255, 255); transform-origin: 374.99px 72.1285px;"
                id="els53nqd7iwm" class="animable"></path>
        </g>
        <g id="freepik--Floor--inject-18" class="animable"
            style="transform-origin: 248px 393.82px;">
            <polygon
                points="61.99 393.82 108.49 393.58 155 393.49 248 393.32 341 393.49 387.51 393.58 434.01 393.82 387.51 394.06 341 394.15 248 394.32 155 394.15 108.49 394.06 61.99 393.82"
                style="fill: rgb(38, 50, 56); transform-origin: 248px 393.82px;" id="el4zg9h2ifaeq"
                class="animable"></polygon>
        </g>
        <g id="freepik--Shadows--inject-18" class="animable animator-hidden"
            style="transform-origin: 253.215px 435.04px;">
            <ellipse cx="144.65" cy="435.04" rx="113.82" ry="16.39"
                style="fill: rgb(235, 235, 235); transform-origin: 144.65px 435.04px;"
                id="el1wi2403cbzl" class="animable"></ellipse>
            <ellipse cx="361.78" cy="435.04" rx="113.82" ry="16.39"
                style="fill: rgb(235, 235, 235); transform-origin: 361.78px 435.04px;"
                id="elzwc97q22xp" class="animable"></ellipse>
        </g>
        <g id="freepik--Device--inject-18" class="animable"
            style="transform-origin: 250.08px 246.22px;">
            <rect x="82.32" y="92.89" width="335.52" height="249.69"
                style="fill: rgb(55, 71, 79); transform-origin: 250.08px 217.735px;"
                id="elqan8e7pztlb" class="animable"></rect>
            <rect x="99.27" y="109.13" width="301.63" height="179.3"
                style="fill: rgb(255, 255, 255); transform-origin: 250.085px 198.78px;"
                id="elr6hj6p8f2u9" class="animable"></rect>
            <rect x="82.32" y="305.75" width="335.52" height="36.83"
                style="fill: rgb(199, 199, 199); transform-origin: 250.08px 324.165px;"
                id="el07t43y85vehh" class="animable"></rect>
            <rect x="178.53" y="387.59" width="143.11" height="11.96"
                style="fill: rgb(55, 71, 79); transform-origin: 250.085px 393.57px;"
                id="elbmq1z3d071" class="animable"></rect>
            <polygon
                points="304.59 387.6 195.57 387.6 198.34 366.84 198.47 365.86 198.73 363.92 198.86 362.94 199.12 360.99 199.16 360.69 199.25 360.01 199.52 358.06 199.64 357.09 201.58 342.59 298.58 342.59 300.4 356.26 300.5 356.92 300.8 359.19 300.88 359.85 301 360.69 301.19 362.12 301.27 362.77 301.57 365.05 301.67 365.7 304.59 387.6"
                style="fill: rgb(199, 199, 199); transform-origin: 250.08px 365.095px;"
                id="eln42xo4xxxen" class="animable"></polygon>
            <rect x="99.27" y="109.13" width="301.63" height="9.7"
                style="fill: rgb(38, 50, 56); transform-origin: 250.085px 113.98px;"
                id="elkpqfjg7tef9" class="animable"></rect>
            <path d="M107,114a2.41,2.41,0,1,1-2.4-2.41A2.4,2.4,0,0,1,107,114Z"
                style="fill: rgb(199, 199, 199); transform-origin: 104.59px 114px;"
                id="elf2oapr33mwq" class="animable"></path>
            <path d="M116.79,114a2.41,2.41,0,1,1-2.4-2.41A2.4,2.4,0,0,1,116.79,114Z"
                style="fill: rgb(255, 255, 255); transform-origin: 114.38px 114px;"
                id="elar6jp16z72" class="animable"></path>
            <path d="M126.62,114a2.41,2.41,0,1,1-2.41-2.41A2.41,2.41,0,0,1,126.62,114Z"
                style="fill: rgb(25, 135, 84); transform-origin: 124.21px 114px;" id="elvg2ldjmv97i"
                class="animable"></path>
            <path d="M256.05,321.69A6.08,6.08,0,1,1,250,315.6,6.08,6.08,0,0,1,256.05,321.69Z"
                style="fill: rgb(55, 71, 79); transform-origin: 249.97px 321.68px;"
                id="elzoerqtrkjtq" class="animable"></path>
            <polygon
                points="301 360.69 199.16 360.69 199.25 360.01 199.52 358.06 199.64 357.09 201.58 342.59 298.58 342.59 300.4 356.26 300.5 356.92 300.8 359.19 300.88 359.85 301 360.69"
                style="fill: rgb(166, 166, 166); transform-origin: 250.08px 351.64px;"
                id="el8iqdzfqshq5" class="animable"></polygon>
            <rect x="99.27" y="118.82" width="301.63" height="40.19"
                style="fill: rgb(25, 135, 84); transform-origin: 250.085px 138.915px;"
                id="elji5qy96dsa" class="animable"></rect>
            <path d="M383.44,272.65H261.56V187H383.44Zm-120.88-1H382.44V188H262.56Z"
                style="fill: rgb(235, 235, 235); transform-origin: 322.5px 229.825px;"
                id="elimzmv6c15rh" class="animable"></path>
            <g id="el5ggutch3o3m">
                <rect x="322" y="156.04" width="1" height="147.57"
                    style="fill: rgb(235, 235, 235); transform-origin: 322.5px 229.825px; transform: rotate(-55.196deg);"
                    class="animable"></rect>
            </g>
            <path
                d="M262.35,272.56l-.58-.82c1.16-.81,116.12-81.06,120.87-84.64l.6.8C378.48,191.49,263.51,271.75,262.35,272.56Z"
                style="fill: rgb(235, 235, 235); transform-origin: 322.505px 229.83px;"
                id="elsvzzomht1ng" class="animable"></path>
            <rect x="192.85" y="118.82" width="114.46" height="35.1"
                style="fill: rgb(38, 50, 56); transform-origin: 250.08px 136.37px;"
                id="elwa1m06buvur" class="animable"></rect>
            <rect x="160.53" y="170.06" width="79.41" height="1.62"
                style="fill: rgb(235, 235, 235); transform-origin: 200.235px 170.87px;"
                id="elt8s69gj80jo" class="animable"></rect>
            <rect x="160.53" y="174.14" width="61.37" height="1.62"
                style="fill: rgb(235, 235, 235); transform-origin: 191.215px 174.95px;"
                id="eli4hxiap8dj9" class="animable"></rect>
            <rect x="160.53" y="178.22" width="74.65" height="1.62"
                style="fill: rgb(235, 235, 235); transform-origin: 197.855px 179.03px;"
                id="elw7jvolkagbh" class="animable"></rect>
            <rect x="160.53" y="182.3" width="81.18" height="1.62"
                style="fill: rgb(235, 235, 235); transform-origin: 201.12px 183.11px;"
                id="elzjf6vxuure7" class="animable"></rect>
            <rect x="160.53" y="186.38" width="42.09" height="1.62"
                style="fill: rgb(235, 235, 235); transform-origin: 181.575px 187.19px;"
                id="el1i9jja8wqds" class="animable"></rect>
            <rect x="160.53" y="190.47" width="79.66" height="1.62"
                style="fill: rgb(235, 235, 235); transform-origin: 200.36px 191.28px;"
                id="elo91tu0md9mk" class="animable"></rect>
            <rect x="160.53" y="194.55" width="66.31" height="1.62"
                style="fill: rgb(235, 235, 235); transform-origin: 193.685px 195.36px;"
                id="el8pk627a1w1d" class="animable"></rect>
            <rect x="160.53" y="198.63" width="83.35" height="1.62"
                style="fill: rgb(235, 235, 235); transform-origin: 202.205px 199.44px;"
                id="elqmqbn11pph" class="animable"></rect>
            <rect x="160.53" y="202.71" width="79.66" height="1.62"
                style="fill: rgb(235, 235, 235); transform-origin: 200.36px 203.52px;"
                id="ell62o5uxs6l" class="animable"></rect>
            <rect x="160.53" y="206.79" width="83.35" height="1.62"
                style="fill: rgb(235, 235, 235); transform-origin: 202.205px 207.6px;"
                id="elmhgvrionvnb" class="animable"></rect>
            <rect x="117.22" y="129.81" width="11.71" height="1.62"
                style="fill: rgb(255, 255, 255); transform-origin: 123.075px 130.62px;"
                id="elxjze4h9g17j" class="animable"></rect>
            <rect x="117.22" y="133.89" width="11.71" height="1.62"
                style="fill: rgb(255, 255, 255); transform-origin: 123.075px 134.7px;"
                id="elqq9ujlv2bhi" class="animable"></rect>
            <rect x="117.22" y="137.97" width="11.71" height="1.62"
                style="fill: rgb(255, 255, 255); transform-origin: 123.075px 138.78px;"
                id="elmzw4xzkzvhd" class="animable"></rect>
            <rect x="262.06" y="170.06" width="120.88" height="8.97"
                style="fill: rgb(25, 135, 84); transform-origin: 322.5px 174.545px;"
                id="el2w3ysd2t51q" class="animable"></rect>
            <rect x="117.22" y="170.05" width="38.35" height="38.36"
                style="fill: rgb(166, 166, 166); transform-origin: 136.395px 189.23px;"
                id="eln43miqaqers" class="animable"></rect>
            <circle cx="136.4" cy="182.3" r="6.93"
                style="fill: rgb(255, 255, 255); transform-origin: 136.4px 182.3px;"
                id="elvuz48bctqf" class="animable"></circle>
            <path d="M148.38,201.43v7h-24v-7a12,12,0,1,1,24,0Z"
                style="fill: rgb(255, 255, 255); transform-origin: 136.38px 198.93px;"
                id="el629yy3vbvl8" class="animable"></path>
            <path
                d="M216.8,145.85v-7a.65.65,0,0,1,.65-.66h1.69a2.26,2.26,0,0,1,2.26,2.26,2.23,2.23,0,0,1-.46,1.36,2.54,2.54,0,0,1-1.34,4.7h-2.15A.65.65,0,0,1,216.8,145.85Zm1.31-4.45h1a1,1,0,0,0,.94-1,.94.94,0,0,0-.94-.94h-1Zm0,3.78h1.49a1.22,1.22,0,0,0,1.22-1.23,1.23,1.23,0,0,0-1.22-1.23h-1.49Z"
                style="fill: rgb(255, 255, 255); transform-origin: 219.472px 142.35px;"
                id="ely4xr7wd3hfo" class="animable"></path>
            <path
                d="M223.86,145.85v-7a.65.65,0,0,1,.65-.66.66.66,0,0,1,.66.66v6.34h3.23a.67.67,0,0,1,.65.67.66.66,0,0,1-.65.65h-3.89A.64.64,0,0,1,223.86,145.85Z"
                style="fill: rgb(255, 255, 255); transform-origin: 226.455px 142.35px;"
                id="el5kymclu9saj" class="animable"></path>
            <path
                d="M236.63,139.22a4.36,4.36,0,0,1,0,6,3.89,3.89,0,0,1-2.84,1.27,4,4,0,0,1-2.91-1.27,4.42,4.42,0,0,1,0-6,3.93,3.93,0,0,1,2.91-1.27A3.81,3.81,0,0,1,236.63,139.22Zm-.15,3a3.1,3.1,0,0,0-.81-2.08,2.57,2.57,0,0,0-3.8,0,3,3,0,0,0-.81,2.08,3,3,0,0,0,.81,2.07,2.53,2.53,0,0,0,3.8,0A3,3,0,0,0,236.48,142.22Z"
                style="fill: rgb(255, 255, 255); transform-origin: 233.766px 142.22px;"
                id="elwqt7clm83s" class="animable"></path>
            <path
                d="M239.81,142.24a4.33,4.33,0,0,1,4.38-4.29,4.41,4.41,0,0,1,2.71.92.68.68,0,1,1-.83,1.07,3.11,3.11,0,0,0-1.88-.64,3,3,0,0,0-2.14.87,2.82,2.82,0,0,0,0,4.11,3,3,0,0,0,2.14.87,3.32,3.32,0,0,0,1.63-.45v-1.63h-1.7a.69.69,0,0,1-.68-.68.66.66,0,0,1,.68-.66h2.37a.66.66,0,0,1,.68.66V145a1.2,1.2,0,0,1,0,.2l0,.06h0a.62.62,0,0,1-.23.29,4.4,4.4,0,0,1-2.7.92A4.32,4.32,0,0,1,239.81,142.24Z"
                style="fill: rgb(255, 255, 255); transform-origin: 243.512px 142.211px;"
                id="elqvj6cvs7fe" class="animable"></path>
            <path
                d="M256.2,143.27h-1.47v2.58a.66.66,0,0,1-1.32,0v-7a.66.66,0,0,1,.66-.66h2.13a2.55,2.55,0,1,1,0,5.09ZM254.73,142h1.47a1.23,1.23,0,1,0,0-2.45h-1.47Z"
                style="fill: rgb(255, 255, 255); transform-origin: 256.16px 142.348px;"
                id="elf0pomgjx0c4" class="animable"></path>
            <path
                d="M266.9,139.22a4.36,4.36,0,0,1,0,6,3.89,3.89,0,0,1-2.84,1.27,4,4,0,0,1-2.91-1.27,4.42,4.42,0,0,1,0-6,4,4,0,0,1,2.91-1.27A3.81,3.81,0,0,1,266.9,139.22Zm-.15,3a3.1,3.1,0,0,0-.81-2.08,2.57,2.57,0,0,0-3.8,0,3,3,0,0,0-.81,2.08,3,3,0,0,0,.81,2.07,2.53,2.53,0,0,0,3.8,0A3,3,0,0,0,266.75,142.22Z"
                style="fill: rgb(255, 255, 255); transform-origin: 264.036px 142.22px;"
                id="elvoym0lvy6bl" class="animable"></path>
            <path
                d="M270.12,144.44a.62.62,0,0,1,.87-.09,3.88,3.88,0,0,0,2.27.92,2.58,2.58,0,0,0,1.49-.44,1.09,1.09,0,0,0,.51-.86.7.7,0,0,0-.11-.38,1.17,1.17,0,0,0-.35-.36,5,5,0,0,0-1.63-.55h0a6.23,6.23,0,0,1-1.53-.47,2.63,2.63,0,0,1-1.11-.92,1.92,1.92,0,0,1-.27-1,2.18,2.18,0,0,1,.95-1.73,3.49,3.49,0,0,1,2.06-.63,4.61,4.61,0,0,1,2.59,1,.61.61,0,0,1,.17.84.6.6,0,0,1-.85.18,3.39,3.39,0,0,0-1.91-.76,2.24,2.24,0,0,0-1.33.4,1,1,0,0,0-.45.75.56.56,0,0,0,.08.33,1.06,1.06,0,0,0,.32.31,4,4,0,0,0,1.49.53h0a6.44,6.44,0,0,1,1.64.5,2.73,2.73,0,0,1,1.19,1,1.92,1.92,0,0,1,.28,1,2.27,2.27,0,0,1-1,1.84,3.69,3.69,0,0,1-2.2.68,5.09,5.09,0,0,1-3-1.19A.63.63,0,0,1,270.12,144.44Z"
                style="fill: rgb(255, 255, 255); transform-origin: 273.245px 142.23px;"
                id="el27s24allpl2" class="animable"></path>
            <path
                d="M283.22,139.5h-1.89v6.35a.65.65,0,0,1-1.3,0V139.5h-1.88a.67.67,0,0,1-.66-.66.65.65,0,0,1,.66-.66h5.07a.66.66,0,0,1,.66.66A.67.67,0,0,1,283.22,139.5Z"
                style="fill: rgb(255, 255, 255); transform-origin: 280.685px 142.338px;"
                id="ell8lmqf30y3d" class="animable"></path>
            <rect x="204.42" y="148.99" width="91.31" height="1.21"
                style="fill: rgb(255, 255, 255); transform-origin: 250.075px 149.595px;"
                id="el44uhof1wjqv" class="animable"></rect>
            <rect x="117.22" y="213.98" width="58.67" height="58.67"
                style="fill: rgb(235, 235, 235); transform-origin: 146.555px 243.315px;"
                id="elrbd1v5mth5" class="animable"></rect>
            <g id="el234m6iaf1os">
                <rect x="117.22" y="213.98" width="58.66" height="41.08"
                    style="fill: rgb(235, 235, 235); transform-origin: 146.55px 234.52px; transform: rotate(180deg);"
                    class="animable"></rect>
            </g>
            <path d="M124.08,225.65a4.86,4.86,0,1,0,4.86-4.86A4.85,4.85,0,0,0,124.08,225.65Z"
                style="fill: rgb(219, 219, 219); transform-origin: 128.94px 225.65px;"
                id="el7jlweugy8re" class="animable"></path>
            <polygon points="143.27 246.12 175.89 246.12 159.58 224.01 143.27 246.12"
                style="fill: rgb(199, 199, 199); transform-origin: 159.58px 235.065px;"
                id="elce3kcpwbmr" class="animable"></polygon>
            <polygon points="130.48 246.22 157.41 246.22 143.95 231.83 130.48 246.22"
                style="fill: rgb(219, 219, 219); transform-origin: 143.945px 239.025px;"
                id="el6w7sap82i3k" class="animable"></polygon>
            <rect x="117.22" y="246.2" width="58.66" height="8.85"
                style="fill: rgb(219, 219, 219); transform-origin: 146.55px 250.625px;"
                id="elnnvhcyubbhc" class="animable"></rect>
            <rect x="121.39" y="259.13" width="50.34" height="1.62"
                style="fill: rgb(255, 255, 255); transform-origin: 146.56px 259.94px;"
                id="eld8yaj43hroa" class="animable"></rect>
            <rect x="121.39" y="263.21" width="34.88" height="1.62"
                style="fill: rgb(255, 255, 255); transform-origin: 138.83px 264.02px;"
                id="eld5ynxtf7fsd" class="animable"></rect>
            <rect x="121.39" y="267.29" width="42.42" height="1.62"
                style="fill: rgb(255, 255, 255); transform-origin: 142.6px 268.1px;"
                id="el12sowwajat2" class="animable"></rect>
            <rect x="185.21" y="213.98" width="58.67" height="58.67"
                style="fill: rgb(235, 235, 235); transform-origin: 214.545px 243.315px;"
                id="el9t8j5tbs28c" class="animable"></rect>
            <g id="el2uv9msowv3z">
                <rect x="185.21" y="213.98" width="58.66" height="41.08"
                    style="fill: rgb(219, 219, 219); transform-origin: 214.54px 234.52px; transform: rotate(180deg);"
                    class="animable"></rect>
            </g>
            <circle cx="214.54" cy="235.06" r="11.16"
                style="fill: rgb(235, 235, 235); transform-origin: 214.54px 235.06px;"
                id="elqwexjnlgmei" class="animable"></circle>
            <polygon points="209.2 229 209.2 241.12 222.03 235.06 209.2 229"
                style="fill: rgb(255, 255, 255); transform-origin: 215.615px 235.06px;"
                id="elkbp0dvn1a6o" class="animable"></polygon>
            <rect x="189.38" y="259.13" width="50.34" height="1.62"
                style="fill: rgb(255, 255, 255); transform-origin: 214.55px 259.94px;"
                id="el7ep1noy3taj" class="animable"></rect>
            <rect x="189.38" y="263.21" width="34.88" height="1.62"
                style="fill: rgb(255, 255, 255); transform-origin: 206.82px 264.02px;"
                id="elxj03yvflt2m" class="animable"></rect>
            <rect x="189.38" y="267.29" width="42.42" height="1.62"
                style="fill: rgb(255, 255, 255); transform-origin: 210.59px 268.1px;"
                id="elr41cbkzwpk" class="animable"></rect>
            <rect x="322.8" y="129.81" width="60.19" height="9.78"
                style="fill: rgb(255, 255, 255); transform-origin: 352.895px 134.7px;"
                id="elmxushistkmq" class="animable"></rect>
            <rect x="373.21" y="129.81" width="9.78" height="9.78"
                style="fill: rgb(38, 50, 56); transform-origin: 378.1px 134.7px;" id="elwdr1ps8irg"
                class="animable"></rect>
            <g id="elgsdpvokg98">
                <rect x="378.8" y="133.67" width="1.13" height="4.59"
                    style="fill: rgb(255, 255, 255); transform-origin: 379.365px 135.965px; transform: rotate(-37.15deg);"
                    class="animable"></rect>
            </g>
            <path d="M379.42,132.24a2.46,2.46,0,1,1-3.46-.46A2.47,2.47,0,0,1,379.42,132.24Z"
                style="fill: rgb(255, 255, 255); transform-origin: 377.462px 133.731px;"
                id="elap8c9yxrood" class="animable"></path>
            <path d="M378.64,132.84a1.48,1.48,0,1,1-2.07-.27A1.48,1.48,0,0,1,378.64,132.84Z"
                style="fill: rgb(38, 50, 56); transform-origin: 377.469px 133.745px;"
                id="elw6jfn8bmtbp" class="animable"></path>
        </g>
        <g id="freepik--character-1--inject-18" class="animable animator-hidden"
            style="transform-origin: 153.571px 290.354px;">
            <path
                d="M217.83,436.38c-1.9.63-56,.47-58.1-.83-.78-.49-1.22-8.39-1.47-17.93-.06-2.06-.1-4.18-.14-6.35,0-2.56-.07-5.15-.09-7.67-.06-11.31.09-21.27.09-21.27h35.25l0,21.27v7.67l-.18,6.35s20.7,9.34,22.8,11S219.72,435.76,217.83,436.38Z"
                style="fill: rgb(247, 169, 160); transform-origin: 188.34px 409.534px;"
                id="el3gogsa1s93" class="animable"></path>
            <path
                d="M217.83,436.38c-1.9.63-56,.47-58.1-.83-.78-.49-1.22-8.39-1.47-17.93-.06-2.06-.1-4.18-.14-6.35,0-2.56-.07-5.15-.09-7.67h35.32v7.67l-.18,6.35s20.7,9.34,22.8,11S219.72,435.76,217.83,436.38Z"
                style="fill: rgb(255, 255, 255); transform-origin: 188.345px 420.169px;"
                id="eltg6kc0p0ywh" class="animable"></path>
            <path
                d="M218,436.46c-1.23.41-24.29.49-41.08.14-3.89-.08-7.44-.19-10.31-.31-3.95-.18-6.6-.4-7-.67-.95-.61-1.41-12.19-1.62-24.41h35.41l-.18,6.38S214,427,216.12,428.67,219.89,435.83,218,436.46Z"
                style="fill: rgb(25, 135, 84); transform-origin: 188.409px 424.015px;"
                id="elpm7kx60mwa" class="animable"></path>
            <path
                d="M217.22,434.28c-9.13-.25-46-.4-55,.05-.07,0-.07.05,0,.06,9,.44,45.87.29,55,0C217.41,434.43,217.41,434.29,217.22,434.28Z"
                style="fill: rgb(38, 50, 56); transform-origin: 189.765px 434.354px;"
                id="el6uqcbna77so" class="animable"></path>
            <path
                d="M194.48,415.57c-3.59-.68-8-.14-10.74,2.41-.1.1,0,.25.16.21A50.51,50.51,0,0,1,194.46,416,.23.23,0,0,0,194.48,415.57Z"
                style="fill: rgb(38, 50, 56); transform-origin: 189.159px 416.749px;"
                id="elwkcmc0qylba" class="animable"></path>
            <path
                d="M197.07,417.14c-3.59-.68-8-.14-10.74,2.41-.11.1,0,.25.15.21a50.74,50.74,0,0,1,10.57-2.16A.23.23,0,0,0,197.07,417.14Z"
                style="fill: rgb(38, 50, 56); transform-origin: 191.788px 418.319px;"
                id="elj6cks02rpc" class="animable"></path>
            <path
                d="M199.65,418.71c-3.59-.68-8-.14-10.73,2.41-.11.1,0,.25.15.21a50.74,50.74,0,0,1,10.57-2.16A.23.23,0,0,0,199.65,418.71Z"
                style="fill: rgb(38, 50, 56); transform-origin: 194.375px 419.889px;"
                id="elly2sgw6c78s" class="animable"></path>
            <path
                d="M202.24,420.28c-3.59-.68-8-.14-10.73,2.41-.11.1,0,.25.15.21a51.18,51.18,0,0,1,10.56-2.17A.23.23,0,0,0,202.24,420.28Z"
                style="fill: rgb(38, 50, 56); transform-origin: 196.939px 421.459px;"
                id="elsqd44mjbrwp" class="animable"></path>
            <path
                d="M201.13,407.29c-1.4-2-4-1.08-5.53.17a19.11,19.11,0,0,0-5.56,8.21.1.1,0,0,0,.09.13.45.45,0,0,0,.56.45c3-1.09,6.27-1.89,8.82-3.85C201,411.25,202.46,409.13,201.13,407.29Zm-6.28,6.39c-1.45.57-2.91,1.07-4.34,1.69a57.56,57.56,0,0,1,3.35-4.72,20.6,20.6,0,0,1,1.91-2c1.07-1,5.31-3,4.66.91C200.08,411.68,196.57,413,194.85,413.68Z"
                style="fill: rgb(38, 50, 56); transform-origin: 195.844px 411.194px;"
                id="elotetasyqylb" class="animable"></path>
            <path
                d="M180.92,414.71c3,1.27,6.36,1.21,9.5,1.53a.45.45,0,0,0,.43-.58.1.1,0,0,0,.05-.15,19.17,19.17,0,0,0-7.42-6.56c-1.77-.84-4.54-1-5.41,1.21S179.19,414,180.92,414.71Zm-1.62-2.57c-1.6-3.65,3-2.72,4.29-2.05A21.48,21.48,0,0,1,186,411.6c1.58,1.13,3,2.47,4.42,3.74-1.53-.25-3.08-.36-4.62-.55C183.91,414.56,180.19,414.16,179.3,412.14Z"
                style="fill: rgb(38, 50, 56); transform-origin: 184.388px 412.308px;"
                id="elzrti56vuvb" class="animable"></path>
            <path
                d="M146.37,232.14s9.52,94.21,9.75,95.4c0,.16.1,2,.19,4.93.51,16.22,1.78,66.79,1.78,66.79H197s-2.53-59.9-4-73.87c-1.86-17.82-13.55-93.25-13.55-93.25Z"
                style="fill: rgb(69, 90, 100); transform-origin: 171.685px 315.7px;"
                id="elc7o53jgev7a" class="animable"></path>
            <path
                d="M160.75,330.87q-1.8-30.63-5.41-61.1c-1.36-11.45-3-22.85-4.63-34.26,0-.1-.18-.1-.16,0,3,20.31,5.14,40.78,7,61.22s3.12,40.88,3.95,61.37c.48,11.61.83,23.22,1.21,34.83a.22.22,0,0,0,.43,0C162.56,372.23,162,351.53,160.75,330.87Z"
                style="fill: rgb(38, 50, 56); transform-origin: 156.844px 314.269px;"
                id="elgtqady2e14u" class="animable"></path>
            <path
                d="M194.5,393a30.13,30.13,0,0,0-3.16-.13c-1.16,0-2.33-.05-3.5-.1q-3.37-.12-6.75-.17c-4.54-.08-9.09-.05-13.62.09l-3.74.13c-1.33.05-2.67.17-4,.17-.1,0-.09.12,0,.12,2.28,0,4.59.19,6.88.28s4.5.12,6.75.15c4.53.06,9.09,0,13.62-.14,1.24,0,2.49-.07,3.74-.11l2-.08a17.45,17.45,0,0,0,1.77-.06A.08.08,0,1,0,194.5,393Z"
                style="fill: rgb(38, 50, 56); transform-origin: 177.131px 393.06px;"
                id="eloydi49wt7s" class="animable"></path>
            <path d="M146.37,232.14s9.52,94.21,9.75,95.4c0,.16.1,2,.19,4.93l18.32-100.33Z"
                style="fill: rgb(38, 50, 56); transform-origin: 160.5px 282.305px;"
                id="elccbqpn7igk" class="animable"></path>
            <path
                d="M80.83,411c-1.72-1-37-42.11-37.32-44.53-.14-.92,5.55-6.4,12.61-12.82,1.52-1.4,3-2.9,4.72-4.26,2.1-1.71,4.23-3.41,6.3-5,9-7,16.79-12.52,16.79-12.52L106.3,357.8,90.38,370.75l-6.53,5.32-4.93,4s6.46,21.77,6.56,24.46S82.54,412,80.83,411Z"
                style="fill: rgb(247, 169, 160); transform-origin: 74.9037px 371.503px;"
                id="el0smmmhhnpc6k" class="animable"></path>
            <path
                d="M80.83,411c-1.72-1-37-42.11-37.32-44.53-.14-.92,5.55-6.4,12.61-12.82,1.52-1.4,3-2.9,4.72-4.26,2.1-1.71,4.23-3.41,6.3-5,6.93,8,17,19.31,23.24,26.36l-6.53,5.32-4.93,4s6.46,21.77,6.56,24.46S82.54,412,80.83,411Z"
                style="fill: rgb(255, 255, 255); transform-origin: 66.9437px 377.763px;"
                id="elzgw4ltktv6" class="animable"></path>
            <path
                d="M80.88,411.19c-1.72-1-37.17-42.35-37.53-44.78-.16-1.13,8.31-9,17.43-17.18L83.91,376l-5,4s6.49,21.89,6.6,24.6S82.6,412.22,80.88,411.19Z"
                style="fill: rgb(25, 135, 84); transform-origin: 64.4303px 380.28px;"
                id="elx2co6p03ba" class="animable"></path>
            <path
                d="M82,409.18c-5.77-7.08-29.72-35.06-36-41.61-.05-.05-.09,0,0,0,5.56,7.13,29.74,34.92,35.89,41.66C82,409.42,82.14,409.32,82,409.18Z"
                style="fill: rgb(38, 50, 56); transform-origin: 64.0026px 388.441px;"
                id="elvnephxhrqci" class="animable"></path>
            <path
                d="M81.33,379.74c-1.82-3.17-5.1-6.14-8.83-6.56-.15,0-.17.19-.06.26A50.34,50.34,0,0,1,81,380,.23.23,0,0,0,81.33,379.74Z"
                style="fill: rgb(38, 50, 56); transform-origin: 76.8536px 376.603px;"
                id="el43drnfywsze" class="animable"></path>
            <path
                d="M81.84,382.72c-1.83-3.16-5.11-6.14-8.84-6.55-.14,0-.16.19-.06.25A50.39,50.39,0,0,1,81.48,383,.23.23,0,0,0,81.84,382.72Z"
                style="fill: rgb(38, 50, 56); transform-origin: 77.3745px 379.618px;"
                id="eloz4oqt7v86" class="animable"></path>
            <path
                d="M82.34,385.71c-1.83-3.17-5.11-6.14-8.84-6.56-.14,0-.16.19-.06.26A49.94,49.94,0,0,1,82,386,.23.23,0,0,0,82.34,385.71Z"
                style="fill: rgb(38, 50, 56); transform-origin: 77.8711px 382.597px;"
                id="eldfvzax04ock" class="animable"></path>
            <path
                d="M82.84,388.69c-1.83-3.16-5.11-6.14-8.84-6.55-.14,0-.16.19-.06.25A50.53,50.53,0,0,1,82.49,389,.23.23,0,0,0,82.84,388.69Z"
                style="fill: rgb(38, 50, 56); transform-origin: 78.388px 385.609px;"
                id="el6mmu63s3llg" class="animable"></path>
            <path
                d="M92,379.36c.55-2.33-1.82-3.76-3.75-4.08a19.24,19.24,0,0,0-9.85,1.16.1.1,0,0,0,0,.15.45.45,0,0,0,0,.72c2.77,1.54,5.53,3.52,8.69,4.16C88.87,381.85,91.43,381.57,92,379.36ZM83,378.78c-1.38-.72-2.71-1.51-4.11-2.18,1.92-.22,3.82-.52,5.76-.55a20.11,20.11,0,0,1,2.8.11c1.43.18,5.76,2,2.35,4.12C87.94,381.43,84.65,379.64,83,378.78Z"
                style="fill: rgb(38, 50, 56); transform-origin: 85.1504px 378.347px;"
                id="elb2lehh1zw4l" class="animable"></path>
            <path
                d="M73.13,368.9c1,3.07,3.23,5.61,5.05,8.2a.45.45,0,0,0,.72-.05A.09.09,0,0,0,79,377a19.14,19.14,0,0,0,.12-9.91c-.52-1.89-2.19-4.1-4.45-3.3S72.56,367.11,73.13,368.9ZM74,366c1.71-3.61,4,.5,4.35,1.91a21.49,21.49,0,0,1,.4,2.77,55.89,55.89,0,0,1,.06,5.79c-.82-1.33-1.74-2.57-2.6-3.87C75.2,371.07,73.07,368,74,366Z"
                style="fill: rgb(38, 50, 56); transform-origin: 76.2422px 370.439px;"
                id="el1bz7t9sz7xph" class="animable"></path>
            <path
                d="M179.4,232.14s-2.39,14.25-11.55,21.6c0,0-21.49,65.17-26.31,72.15-8,11.56-47.78,42.19-47.78,42.19l-25.7-29.8s38.58-27.41,41.6-31.58c2-2.77,17.06-44.68,16.79-46.13-3.12-17.28,4.68-28.47,4.68-28.47Z"
                style="fill: rgb(69, 90, 100); transform-origin: 123.73px 300.09px;"
                id="el4m6tsyvfpob" class="animable"></path>
            <path
                d="M134.17,234.68a41.36,41.36,0,0,0-3.61,10.87,35,35,0,0,0-.51,5.77c0,2.08.22,4.15.29,6.22a22.28,22.28,0,0,1-.64,6.3c-.49,2-1.11,4-1.7,5.94q-1.83,6-3.88,12-4.08,11.91-9,23.49a17.79,17.79,0,0,1-2.87,5,30.7,30.7,0,0,1-4.66,3.84l-10.38,7.78L76.33,337.56v.05c-.23.17,0,.56.24.39,7-5.23,11.41-8.56,18.41-13.79l10.59-7.91c1.67-1.25,3.37-2.47,5-3.76a13.82,13.82,0,0,0,3.57-4,46.66,46.66,0,0,0,2.41-5.29c.82-2,1.63-3.93,2.41-5.9q2.31-5.79,4.4-11.66t4-12c.63-2,1.25-4.06,1.85-6.09a45.48,45.48,0,0,0,1.48-5.93c.62-4.11-.29-8.26-.09-12.39A37.43,37.43,0,0,1,133,237.6a30.26,30.26,0,0,1,1.28-2.85C134.35,234.66,134.21,234.58,134.17,234.68Z"
                style="fill: rgb(38, 50, 56); transform-origin: 105.267px 286.338px;"
                id="eluiddpjpwu4" class="animable"></path>
            <path
                d="M147.57,235.17a13,13,0,0,1-4.44,7,16,16,0,0,1-8.49,3.35c-.52.07-.53.86,0,.84,6.33-.25,12.54-4.59,13.17-11.2C147.84,235,147.6,235,147.57,235.17Z"
                style="fill: rgb(38, 50, 56); transform-origin: 141.029px 240.701px;"
                id="elq0pfnt74me" class="animable"></path>
            <path
                d="M173.72,249.15a35.32,35.32,0,0,0-6.38,3.77c-2.11,1.45-4.05,3.11-6.08,4.66a.08.08,0,0,0,.09.13c2.14-1.36,4.38-2.56,6.5-4a42.36,42.36,0,0,0,6-4.42A.11.11,0,0,0,173.72,249.15Z"
                style="fill: rgb(38, 50, 56); transform-origin: 167.545px 253.433px;"
                id="elmu5lir079wa" class="animable"></path>
            <path
                d="M174,235.92c-.27,1.46-.63,2.91-.94,4.37s-.52,2.76-.88,4.11a7.07,7.07,0,0,1-1.91,3.45c-.54.5-1.13.94-1.7,1.39-.31.25-.64.49-1,.74,0-.2.07-.39.11-.59.09-.56.19-1.12.28-1.67.21-1.24.41-2.47.59-3.71.38-2.43.72-4.89,1.23-7.3,0-.09-.13-.13-.16,0-.6,2.38-1.27,4.74-1.8,7.15-.26,1.18-1.18,7-1.22,7.42s-.08.85-.09,1.28a4.72,4.72,0,0,0,0,1.3c0,.11.15.09.19,0h0a5.38,5.38,0,0,0,.37-1.26c.11-.42.2-.84.28-1.26,0-.15,0-.31.07-.47.57-.34,1.1-.81,1.64-1.19s1.17-.83,1.71-1.29a6.54,6.54,0,0,0,2.1-3.27,23.77,23.77,0,0,0,.68-4.19c.19-1.65.32-3.32.55-5A.08.08,0,0,0,174,235.92Z"
                style="fill: rgb(38, 50, 56); transform-origin: 170.283px 244.921px;"
                id="elxvm5xifouu" class="animable"></path>
            <path
                d="M97.38,362.31c-.57-.86-1.32-1.66-2-2.47s-1.5-1.79-2.23-2.7c-1.41-1.76-2.84-3.49-4.29-5.22C86,348.45,83,345,79.89,341.7c-.85-.92-1.7-1.83-2.56-2.74s-1.87-1.9-2.74-2.91c-.06-.07-.15,0-.09.09,1.51,1.71,2.87,3.6,4.3,5.37s2.86,3.48,4.32,5.2c2.92,3.47,5.94,6.88,9,10.19.86.91,1.69,1.84,2.54,2.76.45.49.91,1,1.37,1.45s.76.91,1.21,1.31A.08.08,0,0,0,97.38,362.31Z"
                style="fill: rgb(38, 50, 56); transform-origin: 85.9393px 349.237px;"
                id="elh1lac6241e" class="animable"></path>
            <path
                d="M167.65,210.63a36.28,36.28,0,0,1-7.8,2.55c5.19-5.3,8.08-19.45,7.14-17.56-4.49,9-13.07,18-15.48,18h0A27.12,27.12,0,0,1,136,206.1l0,0c6.46-5.85,9.77-20.14,9.23-19.35-5.76,8.43-14.28,12.09-15.52,11.77h0c-3.52-5.54-4.88-10.54-4.12-10.83,5.58-2.07,11.72-9.45,17.57-17.41h0c5.78-7.84,9.65-15.69,16.68-22.23,6.42-6,16.09-5.05,20.48-.1C191.81,160.9,171.18,209,167.65,210.63Z"
                style="fill: rgb(38, 50, 56); transform-origin: 154.576px 178.754px;"
                id="elcgda5nne4ya" class="animable"></path>
            <path
                d="M168.38,145.4c-4.07,0-8.1,2.71-10.91,5.47-3.74,3.68-6.71,8.15-10.05,12.18a99,99,0,0,1-22.81,20.52.17.17,0,0,0,.17.3c8.84-3.79,15.94-10.6,22.17-17.86,3.18-3.72,6-7.74,9-11.53a29.35,29.35,0,0,1,5.71-5.59,18.24,18.24,0,0,1,6.77-2.77A.37.37,0,0,0,168.38,145.4Z"
                style="fill: rgb(38, 50, 56); transform-origin: 146.609px 164.646px;"
                id="elhmj5ziorqhl" class="animable"></path>
            <path
                d="M168.32,187.89c2.72,5.63,21.6,23.65,37.13,29.24,5.7,2.05,30.28-3.85,36.1-6.31,6.81-2.89,2.28-19.88-2.07-19.86-5.44,0-28.75,5.61-33.73,5.49-6.06-.15-20.12-9.41-32.07-14.06C167.52,180,166.22,183.54,168.32,187.89Z"
                style="fill: rgb(247, 169, 160); transform-origin: 206.211px 199.587px;"
                id="el1fjhdk4ti5t" class="animable"></path>
            <path
                d="M241.55,210.82c2.19-.8,11.91-5.36,14.33-7.23s9-7.76,7.76-9.76-3.31-.43-3.31-.43,2.38-2.93.94-4.83-4.56.65-4.56.65,2.22-3.18.66-5-4.29,1.29-4.29,1.29,2.17-2.81.26-3.74c-2.3-1.13-5.72,4.52-8.55,6.39-.64.42-13.63,7.66-13.63,7.66Z"
                style="fill: rgb(247, 169, 160); transform-origin: 247.477px 196.221px;"
                id="ellemu1m95f7" class="animable"></path>
            <path
                d="M253.32,185.28c-2.53,4.15-4.35,5.53-8.63,7.65-.08,0,0,.18.05.14,4.38-1.7,6.92-3.09,8.78-7.67C253.62,185.17,253.44,185.09,253.32,185.28Z"
                style="fill: rgb(38, 50, 56); transform-origin: 249.103px 189.125px;"
                id="elh0kpsw6xvxe" class="animable"></path>
            <path
                d="M256.9,188.89c-3,4.08-5,5.59-9.28,8.14-.06,0,0,.15.06.12,4.44-2.16,6.94-3.61,9.4-8.08C257.19,188.87,257,188.7,256.9,188.89Z"
                style="fill: rgb(38, 50, 56); transform-origin: 252.354px 192.981px;"
                id="eldtwmwn851" class="animable"></path>
            <path
                d="M260.1,193.52c-3.19,3.74-5.27,5.49-9.78,7.43a.09.09,0,0,0,.06.17,16.27,16.27,0,0,0,9.83-7.49C260.37,193.37,260.3,193.29,260.1,193.52Z"
                style="fill: rgb(38, 50, 56); transform-origin: 255.279px 197.255px;"
                id="el0xkdhk49o2oa" class="animable"></path>
            <path
                d="M227.31,195.12a59.45,59.45,0,0,1,6-6.44c2.14-1.71,12.45-5.14,13.32-3,1.12,2.82-4.44,6-7.37,7.16,0,0,2.6,6.52-.91,9.65S227.31,195.12,227.31,195.12Z"
                style="fill: rgb(247, 169, 160); transform-origin: 237.043px 194.036px;"
                id="elag487ukm04w" class="animable"></path>
            <path
                d="M246.65,186.6c-.84,3.31-4.78,4.62-7.53,6a.28.28,0,0,0-.09.45c.9,2.81,1.36,7-.52,9.51-.06.07,0,.16.1.1,2.39-2.39,2.27-6.57,1.08-9.58,2.85-1.36,6.74-2.85,7-6.46C246.68,186.59,246.65,186.58,246.65,186.6Z"
                style="fill: rgb(38, 50, 56); transform-origin: 242.588px 194.635px;"
                id="els6ssnyedndr" class="animable"></path>
            <path
                d="M216.74,194.84s3.6-1.08,3.93-.08-1.51,2.44-1.51,2.44,2.51,0,2.83,1.59-2.31,2.6-2.31,2.6,2.72.78,2.81,1.91c.12,1.52-2.2,2.32-2.2,2.32s2.64.21,2.74,1.7-2.3,2.22-2.3,2.22,2.78.35,3.05,1.47c.31,1.33-2.42,2.52-2.42,2.52s2.63.43,2.79,1.58-2.44,2.1-3.8,2.11Z"
                style="fill: rgb(255, 255, 255); transform-origin: 220.449px 205.778px;"
                id="elct6upda0uzo" class="animable"></path>
            <path
                d="M220.81,217.41s-13.35.76-15.23.09a57.76,57.76,0,0,1-6-2.55c-14.79-7.21-26.51-19.85-30.09-24.48-3.77-4.89-3.78-10.78,2.57-8.94.47.14,1,.32,1.51.54,7.84,3.25,29.43,13.88,31.67,14.05s12.19-1.79,12.19-1.79Z"
                style="fill: rgb(25, 135, 84); transform-origin: 193.864px 199.481px;"
                id="elrlisq723sh" class="animable"></path>
            <path
                d="M199.56,215c-14.79-7.21-26.51-19.85-30.09-24.48-3.77-4.89-3.78-10.78,2.57-8.94Z"
                style="fill: rgb(38, 50, 56); transform-origin: 183.229px 198.118px;"
                id="elm6ez2i57lmf" class="animable"></path>
            <path
                d="M181.31,219.29l.26,22.92a75.48,75.48,0,0,1-8.38,0,196.8,196.8,0,0,1-22-2.28c-7.21-1.13-15.7-2.77-25.45-5.15,0,0,17.36-40.58,31-52.68q.47-.42.93-.78l.18-.15c6.25-4.91,12.58-2.22,16.46,2.16,1,1.09,11,18.85,11.27,25.12C185.77,214,181.31,219.29,181.31,219.29Z"
                style="fill: rgb(25, 135, 84); transform-origin: 155.663px 210.433px;"
                id="elik3ryhx1sdd" class="animable"></path>
            <path
                d="M173.19,242.23a196.8,196.8,0,0,1-22-2.28c1-10.69,4.42-47,5.52-57.83q.47-.42.93-.78Z"
                style="fill: rgb(38, 50, 56); transform-origin: 162.19px 211.785px;"
                id="elp9js1sw24r9" class="animable"></path>
            <path
                d="M154.17,190.64c1.88,13.09,6.63,39.56,14,46,9.68,8.47,32.08,10,38.72,10.48,2.89.21,5.4-18.92,3.25-21.14S185,223,183,221.93s-12-20.87-16.93-31C159.83,178.26,153.43,185.48,154.17,190.64Z"
                style="fill: rgb(247, 169, 160); transform-origin: 182.529px 215.493px;"
                id="el1kin25xkx6" class="animable"></path>
            <path
                d="M227.74,229.3c3.62.07,8.45-2.83,9.19-.24.66,2.31-2.88,4-2.88,4s4.6-.61,4.61,2.08-4.26,3.73-4.26,3.73,4.26-.33,4.08,2.35-4.1,3.89-4.1,3.89,1.22.55.24,2.38c-1.41,2.62-7.74,3.73-11.19,3.53s-15.9-3.51-17.8-4l1.13-22.12s6.29-2.46,9.64-3.32,15.15-.63,15.29,2.3-8.2,2.63-10.25,3-2.32.91-1.27,1.47A44.34,44.34,0,0,0,227.74,229.3Z"
                style="fill: rgb(247, 169, 160); transform-origin: 222.145px 236.092px;"
                id="elpf6755011yf" class="animable"></path>
            <path
                d="M233.85,233.05c-5.1,2-7.68,2-13,1-.1,0-.16.13,0,.16,5.09,1.47,8.32,1.94,13.13-.89C234.19,233.15,234.09,233,233.85,233.05Z"
                style="fill: rgb(38, 50, 56); transform-origin: 227.423px 234.211px;"
                id="elelycyyv17z" class="animable"></path>
            <path
                d="M234.6,238.73c-5.48,1.61-8.27,1.63-13.89,1-.08,0-.1.12,0,.14,5.46,1.1,8.69,1.51,13.95-.82C234.88,238.91,234.85,238.65,234.6,238.73Z"
                style="fill: rgb(38, 50, 56); transform-origin: 227.725px 239.733px;"
                id="elwqrxhw3ajgr" class="animable"></path>
            <path
                d="M234.31,245.07c-5.41,1.18-8.48,1.33-13.85,0a.1.1,0,0,0-.06.2,18.43,18.43,0,0,0,13.93,0C234.65,245.12,234.65,245,234.31,245.07Z"
                style="fill: rgb(38, 50, 56); transform-origin: 227.447px 245.843px;"
                id="elf6nffm3vpmt" class="animable"></path>
            <path
                d="M192.34,221.69s4.09.1,4.1,1.25-2.39,2-2.39,2,2.58.89,2.39,2.61-3.27,1.91-3.27,1.91,2.56,1.73,2.27,2.94c-.38,1.61-3.06,1.66-3.06,1.66s2.67,1.11,2.26,2.69-3.13,1.52-3.13,1.52,2.76,1.3,2.66,2.55c-.12,1.48-3.35,1.8-3.35,1.8s2.57,1.33,2.35,2.58-3.24,1.35-4.65.9Z"
                style="fill: rgb(255, 255, 255); transform-origin: 192.485px 234.017px;"
                id="eldzlhaoplmoc" class="animable"></path>
            <path
                d="M194.05,221.51l-4.51,25s-18.88-4.83-22.89-10.82c-5-7.48-11.51-31-12.93-43.53s7.42-12.88,12.57-2.63c5,9.95,15.62,29.71,16.45,30.56C183.82,221.23,194.05,221.51,194.05,221.51Z"
                style="fill: rgb(25, 135, 84); transform-origin: 173.809px 214.388px;"
                id="el8m6d8ic10m" class="animable"></path>
            <path
                d="M181.43,217.55c-.51-1-1.52-3.11-2-4-1-1.84-2.05-3.68-3.1-5.51s-2.08-3.67-3.16-5.48c-.19-.3-.36-.62-.55-.93,0-.22-.8-2.76-.92-3.4,0-.1-.18-.07-.15,0a13.66,13.66,0,0,1,.35,1.91c0,.12,0,.24.08.36-.69-1.19-1.38-2.39-2.08-3.54-.05-.09-.19,0-.14.07,1.39,2.5,2.15,4.1,3.2,6.14s2.11,3.93,3.18,5.88,2.19,3.89,3.29,5.82a39,39,0,0,0,2.09,3.37C182,218.92,182,218.54,181.43,217.55Z"
                style="fill: rgb(38, 50, 56); transform-origin: 175.809px 207.753px;"
                id="eldg0l3npssin" class="animable"></path>
            <path
                d="M163.18,180.41c.22.86,4.44,6.42,8.4,6.18,1.29-.09,1.15-7.15,1.15-7.15l.11-.52,1.52-7.33-8.67-5.37-1.25-.71s-.28,2-.61,4.57c0,.12,0,.24,0,.36a3.12,3.12,0,0,0-.06.41c-.06.38-.11.77-.16,1.15s-.07.58-.09.89-.06.61-.1.92A47.36,47.36,0,0,0,163.18,180.41Z"
                style="fill: rgb(247, 169, 160); transform-origin: 168.757px 176.054px;"
                id="elq0jb4rcpu8m" class="animable"></path>
            <path
                d="M163.83,170.08a15,15,0,0,0,9,8.84l1.52-7.33-8.67-5.37-1.25-.71S164.16,167.55,163.83,170.08Z"
                style="fill: rgb(38, 50, 56); transform-origin: 169.09px 172.215px;"
                id="elcbct051f0pj" class="animable"></path>
            <path d="M163.18,164.24s-3-4-4.79-3,.44,7,2.64,7.72a2.22,2.22,0,0,0,2.95-1.25Z"
                style="fill: rgb(247, 169, 160); transform-origin: 160.859px 165.11px;"
                id="eleq8r6e7pq0p" class="animable"></path>
            <path
                d="M159.09,162.93s-.05,0,0,.06a5.62,5.62,0,0,1,3,3.45,1.24,1.24,0,0,0-1.84-.3s0,.1,0,.09a1.36,1.36,0,0,1,1.51.44,7.09,7.09,0,0,1,.75,1.2c.07.14.32.06.26-.1v0C162.76,165.79,161.19,163.08,159.09,162.93Z"
                style="fill: rgb(38, 50, 56); transform-origin: 160.923px 165.436px;"
                id="elnm4ldi0aoie" class="animable"></path>
            <path
                d="M184.12,159.76c1.4,13.06-6.27,15.38-9.09,15.67-2.55.28-11.29.87-14-12s2.89-17.63,8.7-18.56S182.72,146.7,184.12,159.76Z"
                style="fill: rgb(247, 169, 160); transform-origin: 172.308px 160.119px;"
                id="el1wjxyjjuuclj" class="animable"></path>
            <path
                d="M181.5,158a8.89,8.89,0,0,1-.9-.15,1.47,1.47,0,0,1-.88-.33.47.47,0,0,1,0-.57,1.15,1.15,0,0,1,1.13-.32,1.72,1.72,0,0,1,1.09.57A.49.49,0,0,1,181.5,158Z"
                style="fill: rgb(38, 50, 56); transform-origin: 180.839px 157.298px;"
                id="elkstyu1mu14" class="animable"></path>
            <path
                d="M172.42,158.65c.31-.05.58-.15.88-.22a1.5,1.5,0,0,0,.86-.4.47.47,0,0,0,0-.57,1.16,1.16,0,0,0-1.15-.23,1.73,1.73,0,0,0-1,.64A.5.5,0,0,0,172.42,158.65Z"
                style="fill: rgb(38, 50, 56); transform-origin: 173.09px 157.908px;"
                id="ele6osa7ic7b4" class="animable"></path>
            <path
                d="M174.29,161.89s-.07.05-.06.09c.08.89,0,1.92-.77,2.27,0,0,0,.05,0,.05C174.45,164.1,174.51,162.72,174.29,161.89Z"
                style="fill: rgb(38, 50, 56); transform-origin: 173.927px 163.095px;"
                id="elvh85au21xqp" class="animable"></path>
            <path d="M173.44,161c-1.44,0-1.38,2.86-.05,2.88S174.65,161,173.44,161Z"
                style="fill: rgb(38, 50, 56); transform-origin: 173.372px 162.44px;"
                id="elxybvdebkgq9" class="animable"></path>
            <path
                d="M172.87,161.17c-.24.17-.48.47-.79.5s-.62-.25-.86-.54c0,0-.05,0-.05,0,0,.55.23,1.11.83,1.18s.92-.43,1-1C173.07,161.26,173,161.11,172.87,161.17Z"
                style="fill: rgb(38, 50, 56); transform-origin: 172.099px 161.723px;"
                id="elfykvjysrnuh" class="animable"></path>
            <path
                d="M179.88,161.37s.08,0,.07.08c0,.89.12,1.92.93,2.2,0,0,0,.06,0,0C179.89,163.58,179.73,162.21,179.88,161.37Z"
                style="fill: rgb(38, 50, 56); transform-origin: 180.356px 162.523px;"
                id="elmpw15pxqco9" class="animable"></path>
            <path d="M180.67,160.42c1.44-.12,1.59,2.76.26,2.88S179.47,160.53,180.67,160.42Z"
                style="fill: rgb(38, 50, 56); transform-origin: 180.845px 161.86px;"
                id="el7mzt5bhqf9j" class="animable"></path>
            <path
                d="M181.28,160.58c.24.14.48.41.75.41s.53-.32.72-.63c0,0,0,0,.05,0,0,.55-.11,1.14-.64,1.27s-.85-.33-1-.88C181.12,160.68,181.19,160.52,181.28,160.58Z"
                style="fill: rgb(38, 50, 56); transform-origin: 181.974px 161.006px;"
                id="eluwqxzu3abr" class="animable"></path>
            <path
                d="M174.88,168.74c.21.22.41.51.74.55a2.46,2.46,0,0,0,1-.2s.06,0,0,0a1.21,1.21,0,0,1-1.15.46,1,1,0,0,1-.68-.81C174.78,168.73,174.85,168.71,174.88,168.74Z"
                style="fill: rgb(38, 50, 56); transform-origin: 175.718px 169.145px;"
                id="elwd3h9i64cb" class="animable"></path>
            <path
                d="M178.51,165.39s.23,1.33.25,2c0,.06-.15.09-.37.11h0a3,3,0,0,1-3-1c0-.06,0-.13.1-.09a4.48,4.48,0,0,0,2.75.69c0-.17-.46-2.26-.36-2.27a5.37,5.37,0,0,1,1.44.28c-.4-2.79-1.24-5.48-1.59-8.26a.09.09,0,0,1,.17,0,45.85,45.85,0,0,1,2.08,8.81C180.07,165.92,178.76,165.49,178.51,165.39Z"
                style="fill: rgb(38, 50, 56); transform-origin: 177.687px 162.185px;"
                id="el2o150blkm68" class="animable"></path>
            <path
                d="M161.8,164.3c2.16,0,2.31-4.55,2.31-4.55s4.36-.32,5.32-6.71a9.72,9.72,0,0,1-1.53,5.34s7.63-1.41,10.38-8.1c0,0-1,3.38-2.17,4.64a9.09,9.09,0,0,0,4.54-3.89s1.63,3.61,2.75,4.56c0,0-1.36-13.45-13.73-11.05,0,0-7.77,1.12-10.1,7.52S161.8,164.3,161.8,164.3Z"
                style="fill: rgb(38, 50, 56); transform-origin: 171.154px 154.277px;"
                id="elopla0ffrbio" class="animable"></path>
            <path
                d="M164,178.56c-1.6.15-4.26.73-7.6,3.87,0,0,8.19,5.31,15.24,4.6,2.52-.25,3-4.49,3-4.49A13.45,13.45,0,0,0,164,178.56Z"
                style="fill: rgb(247, 169, 160); transform-origin: 165.52px 182.807px;"
                id="elo4maawnyg1o" class="animable"></path>
        </g>
        <g id="freepik--character-2--inject-18" class="animable"
            style="transform-origin: 360.36px 301.878px;">
            <path
                d="M325.79,436.6c1.9.64,56.29.83,58.37-.47.79-.49,1.28-8.41,1.6-18,.07-2.07.13-4.21.17-6.38l4.41-29L354,382.51l-3.43,29,.14,6.39s-20.86,9.24-23,10.91S323.89,436,325.79,436.6Z"
                style="fill: rgb(221, 106, 87); transform-origin: 357.651px 409.803px;"
                id="el5kilq8q2nb3" class="animable"></path>
            <path
                d="M325.79,436.6c1.9.64,56.29.83,58.37-.47,1-.6,1.48-12.17,1.77-24.38l-35.38-.23.14,6.39s-20.86,9.24-23,10.91S323.89,436,325.79,436.6Z"
                style="fill: rgb(255, 255, 255); transform-origin: 355.444px 424.308px;"
                id="el32qrzwyp7qm" class="animable"></path>
            <path
                d="M325.79,436.6c1.9.64,56.29.83,58.37-.47.79-.49,1.28-8.41,1.6-18l-35.07-.22s-20.86,9.24-23,10.91S323.89,436,325.79,436.6Z"
                style="fill: rgb(25, 135, 84); transform-origin: 355.359px 427.503px;"
                id="el482s4oyn5k5" class="animable"></path>
            <path
                d="M326.58,434.42c9.11-.19,45.91-.1,54.94.4.07,0,.07.06,0,.06-9,.39-45.83,0-54.94-.31C326.38,434.57,326.38,434.43,326.58,434.42Z"
                style="fill: rgb(38, 50, 56); transform-origin: 354.001px 434.686px;"
                id="elgm679hokhyh" class="animable"></path>
            <path
                d="M331.21,426.88a7.35,7.35,0,0,1,5.45,2.24,7.1,7.1,0,0,1,2,4.88c0,.05-.1.05-.11,0a8.47,8.47,0,0,0-7.36-7A.06.06,0,0,1,331.21,426.88Z"
                style="fill: rgb(38, 50, 56); transform-origin: 334.9px 430.458px;"
                id="ely7hkmeuqkh" class="animable"></path>
            <path
                d="M347.15,418.8c3.65,0,7.88,1.27,10.13,4.26.09.11-.08.24-.18.18a50.86,50.86,0,0,0-10-4A.23.23,0,0,1,347.15,418.8Z"
                style="fill: rgb(38, 50, 56); transform-origin: 352.131px 421.028px;"
                id="el5daoviaw0ig" class="animable"></path>
            <path
                d="M344.33,419.89c3.65,0,7.88,1.26,10.13,4.26.09.11-.08.24-.18.18a50.7,50.7,0,0,0-10-4A.23.23,0,0,1,344.33,419.89Z"
                style="fill: rgb(38, 50, 56); transform-origin: 349.311px 422.118px;"
                id="el90mfmlfux2" class="animable"></path>
            <path
                d="M341.51,421c3.65,0,7.87,1.26,10.13,4.26.09.11-.08.23-.19.18a50.37,50.37,0,0,0-10-4A.23.23,0,0,1,341.51,421Z"
                style="fill: rgb(38, 50, 56); transform-origin: 346.487px 423.226px;"
                id="elwhm766ccm2r" class="animable"></path>
            <path
                d="M338.69,422.07c3.65,0,7.87,1.26,10.13,4.25.09.12-.08.24-.19.19a49.78,49.78,0,0,0-10-4A.23.23,0,0,1,338.69,422.07Z"
                style="fill: rgb(38, 50, 56); transform-origin: 343.667px 424.296px;"
                id="el4ktkuby9k1g" class="animable"></path>
            <path d="M379.23,426.16c4.09,0,4.06,6.38-.05,6.36S375.12,426.13,379.23,426.16Z"
                style="fill: rgb(38, 50, 56); transform-origin: 379.201px 429.34px;"
                id="elbq07dgp6se" class="animable"></path>
            <path
                d="M343.51,414.4c2,2.55,5,4.16,7.55,6a.45.45,0,0,0,.66-.29.09.09,0,0,0,.11-.1,19.21,19.21,0,0,0-3.28-9.35c-1.13-1.59-3.46-3.1-5.31-1.57S342.37,412.91,343.51,414.4Zm-.16-3c.38-4,3.95-.91,4.74.3a20.83,20.83,0,0,1,1.33,2.46c.82,1.76,1.39,3.6,2,5.42-1.22-1-2.51-1.82-3.76-2.74C346.2,415.73,343.15,413.56,343.35,411.38Z"
                style="fill: rgb(38, 50, 56); transform-origin: 347.019px 414.456px;"
                id="el549glzgsr9" class="animable"></path>
            <path
                d="M364.8,417.69c-.28-2.39-3-2.91-4.92-2.55A19.11,19.11,0,0,0,351,419.6a.09.09,0,0,0,0,.15.45.45,0,0,0,.27.67c3.12.49,6.39,1.41,9.57.93C362.75,421.07,365.06,419.94,364.8,417.69Zm-8.6,2.51c-1.54-.21-3.06-.49-4.61-.64,1.73-.86,3.41-1.79,5.23-2.48a19.18,19.18,0,0,1,2.66-.86c1.41-.33,6.1-.06,3.62,3.06C361.74,421,358,420.45,356.2,420.2Z"
                style="fill: rgb(38, 50, 56); transform-origin: 357.877px 418.261px;"
                id="el69gmmvwke97" class="animable"></path>
            <path
                d="M443.77,248.64s-42.22,71.84-43.35,76.88c-1.74,7.75-10.95,84.28-10.95,84.28L345.53,409s7.58-67.48,14.75-89.71c5.17-16,42.43-69.12,42.43-69.12Z"
                style="fill: rgb(25, 135, 84); transform-origin: 394.65px 329.22px;"
                id="el9ec1esocows" class="animable"></path>
            <path
                d="M349.53,402.28c6.31,0,28.67-.3,37.07.48a.06.06,0,0,1,0,.12c-2.9.42-30.77-.23-37.07-.43A.09.09,0,1,1,349.53,402.28Z"
                style="fill: rgb(38, 50, 56); transform-origin: 368.035px 402.621px;"
                id="elo1xbav8mlz" class="animable"></path>
            <path
                d="M436.57,255.23c-2.77,4.34-5.69,8.59-8.52,12.9s-5.65,8.61-8.43,12.94q-8.36,13-16.3,26.23a79.37,79.37,0,0,0-6.58,12.8A77.59,77.59,0,0,0,393,333.89c-.86,4.71-1.43,9.47-2,14.23q-.85,7.61-1.7,15.21l-3.47,31.11c-.15,1.27-.29,2.54-.41,3.82,0,.18.31.22.34,0,1.29-10.3,2.36-20.64,3.54-31q.87-7.71,1.75-15.41c.54-4.78,1.06-9.56,1.8-14.31a95.09,95.09,0,0,1,3.1-13.84,66.26,66.26,0,0,1,6.07-13.44c5.09-8.78,10.48-17.41,15.87-26s10.92-17.34,16.6-25.87c.71-1.06,1.41-2.11,2.14-3.14C436.76,255.23,436.62,255.15,436.57,255.23Z"
                style="fill: rgb(38, 50, 56); transform-origin: 411.052px 326.803px;"
                id="el9yi1d8th725" class="animable"></path>
            <path
                d="M406.44,442.64c2,.13,56-14.1,57.65-15.89a.8.8,0,0,0,.13-.36c.21-1.77-2.55-8.4-4.49-16.88-.12-.54-1.13-3.12-2.56-6.59-3.91-9.56-10.9-25.95-10.9-25.95L411,386l13,26.08,1.76,6.14S408,432.47,406.32,434.63,404.45,442.5,406.44,442.64Z"
                style="fill: rgb(221, 106, 87); transform-origin: 434.617px 409.805px;"
                id="els8xib0701q9" class="animable"></path>
            <path
                d="M406.44,442.64c2,.13,56-14.1,57.65-15.89a.8.8,0,0,0,.13-.36c.21-1.77-2.55-8.4-4.49-16.88-.12-.54-1.13-3.12-2.56-6.59L424,412.08l1.76,6.14S408,432.47,406.32,434.63,404.45,442.5,406.44,442.64Z"
                style="fill: rgb(255, 255, 255); transform-origin: 434.617px 422.78px;"
                id="elreahy7wmmta" class="animable"></path>
            <path
                d="M406.45,442.63c2,.14,56-14.09,57.64-15.88.64-.67-.76-8-4.35-17.24l-34,8.71S408,432.47,406.32,434.63,404.45,442.5,406.45,442.63Z"
                style="fill: rgb(25, 135, 84); transform-origin: 434.622px 426.071px;"
                id="elys4590bwvj" class="animable"></path>
            <path
                d="M406.66,440.33c8.76-2.5,44.37-11.79,53.23-13.6.07,0,.08,0,0,.06-8.63,2.67-44.31,11.67-53.21,13.69C406.5,440.52,406.47,440.39,406.66,440.33Z"
                style="fill: rgb(38, 50, 56); transform-origin: 433.238px 433.609px;"
                id="elak4dj789jtg" class="animable"></path>
            <path
                d="M409.22,431.85a7.37,7.37,0,0,1,5.84.79,7.08,7.08,0,0,1,3.19,4.2c0,.05-.08.08-.11,0a8.46,8.46,0,0,0-8.89-4.91C409.17,432,409.15,431.88,409.22,431.85Z"
                style="fill: rgb(38, 50, 56); transform-origin: 413.714px 434.229px;"
                id="el1kne5ebyg1l" class="animable"></path>
            <path
                d="M422.57,420c3.52-1,7.94-.79,10.89,1.53.11.09,0,.25-.14.23a49.94,49.94,0,0,0-10.69-1.31A.23.23,0,0,1,422.57,420Z"
                style="fill: rgb(38, 50, 56); transform-origin: 427.956px 420.597px;"
                id="elzhomz34yc9c" class="animable"></path>
            <path
                d="M420.12,421.76c3.52-1,7.94-.78,10.89,1.53.11.09,0,.26-.14.23a49.94,49.94,0,0,0-10.69-1.31A.23.23,0,0,1,420.12,421.76Z"
                style="fill: rgb(38, 50, 56); transform-origin: 425.506px 422.359px;"
                id="elb12fy7boafi" class="animable"></path>
            <path
                d="M417.67,423.53c3.52-1,7.94-.78,10.89,1.54.11.08,0,.25-.14.22a50,50,0,0,0-10.7-1.31A.23.23,0,0,1,417.67,423.53Z"
                style="fill: rgb(38, 50, 56); transform-origin: 423.055px 424.129px;"
                id="eltyhn51ipj6" class="animable"></path>
            <path
                d="M415.22,425.3c3.52-1,7.94-.78,10.88,1.54.12.09,0,.25-.13.22a50,50,0,0,0-10.7-1.31A.23.23,0,0,1,415.22,425.3Z"
                style="fill: rgb(38, 50, 56); transform-origin: 420.602px 425.9px;"
                id="elywr6b87sb4o" class="animable"></path>
            <path d="M455.47,418.93c4-1,5.55,5.15,1.58,6.17S451.49,420,455.47,418.93Z"
                style="fill: rgb(38, 50, 56); transform-origin: 456.262px 422.017px;"
                id="el1yvsu8axfbw" class="animable"></path>
            <path
                d="M417.94,416.66c2.54,2,5.85,2.75,8.81,3.84a.45.45,0,0,0,.56-.45.1.1,0,0,0,.09-.13,19.21,19.21,0,0,0-5.55-8.2c-1.51-1.25-4.14-2.12-5.54-.17S416.45,415.51,417.94,416.66Zm-.93-2.89c-.64-3.93,3.59-1.88,4.66-.91a20.6,20.6,0,0,1,1.91,2.05,57.39,57.39,0,0,1,3.35,4.71c-1.43-.62-2.89-1.12-4.34-1.69C420.87,417.25,417.37,415.94,417,413.77Z"
                style="fill: rgb(38, 50, 56); transform-origin: 421.582px 415.459px;"
                id="elez43rdedpdd" class="animable"></path>
            <path
                d="M439.36,414.41c-.88-2.23-3.64-2.05-5.4-1.21a19.13,19.13,0,0,0-7.42,6.57.09.09,0,0,0,0,.14.45.45,0,0,0,.43.58c3.14-.32,6.54-.27,9.49-1.54C438.24,418.21,440.19,416.53,439.36,414.41ZM431.69,419c-1.55.2-3.09.31-4.62.56,1.45-1.27,2.84-2.6,4.41-3.73a21,21,0,0,1,2.36-1.51c1.28-.67,5.89-1.61,4.29,2C437.24,418.4,433.52,418.81,431.69,419Z"
                style="fill: rgb(38, 50, 56); transform-origin: 433.032px 416.555px;"
                id="elf4qhgum53zh" class="animable"></path>
            <path
                d="M421.6,410.41l39.47-10.36s-37.79-74.38-37.48-79.52c.27-4.55,27.68-44.47,29.2-51.94,2.48-12.23-3.48-23.15-9.25-29.92l-40.83,11.51a34,34,0,0,0,9.22,11.52s-25.66,42.85-26.31,56.94S421.6,410.41,421.6,410.41Z"
                style="fill: rgb(25, 135, 84); transform-origin: 423.341px 324.54px;"
                id="elm6bogeheyr9" class="animable"></path>
            <path
                d="M420.84,403.05c5.73-1.64,4.06-1.25,9.81-2.82,2.81-.77,21.29-5.82,24-6.08.06,0,.08.09,0,.11-2.52,1.14-21.08,5.86-23.91,6.58-5.77,1.47-4.13,1-9.92,2.38C420.78,403.25,420.74,403.09,420.84,403.05Z"
                style="fill: rgb(38, 50, 56); transform-origin: 437.74px 398.687px;"
                id="elx6af5ei45x" class="animable"></path>
            <path
                d="M405.66,260.06A73,73,0,0,1,417,265.39a.13.13,0,0,1-.11.23c-3.81-1.67-7.7-3.26-11.41-5.12A.24.24,0,0,1,405.66,260.06Z"
                style="fill: rgb(38, 50, 56); transform-origin: 411.206px 262.838px;"
                id="elugthse11scj" class="animable"></path>
            <path
                d="M410.46,259.05a17.71,17.71,0,0,1,.73,2.2,4.91,4.91,0,0,1,.29,1.81c0,.11-.18.12-.24,0a6.13,6.13,0,0,1-.76-1.76c-.25-.68-.52-1.36-.74-2A.38.38,0,0,1,410.46,259.05Z"
                style="fill: rgb(38, 50, 56); transform-origin: 410.601px 260.971px;"
                id="elkpdogv3zow" class="animable"></path>
            <path
                d="M410.46,255.35c-.16-.62-.33-1.25-.5-1.87s-.41-1.29-.54-1.94c0-.11-.18-.06-.16,0,.16.63.24,1.29.35,1.93s.23,1.27.36,1.91a36,36,0,0,0,.9,3.54,4.3,4.3,0,0,1-1.82-.56,3.39,3.39,0,0,1-1.11-1.74c-.25-.71-.48-1.43-.75-2.14a15.44,15.44,0,0,1-.79-2.38c0-.11-.18-.06-.16,0a26.17,26.17,0,0,0,1.46,5c.28.64.49,1.29,1.12,1.61a5.45,5.45,0,0,0,2.19.43c.08,0,.21,0,.19-.12A37.3,37.3,0,0,0,410.46,255.35Z"
                style="fill: rgb(38, 50, 56); transform-origin: 408.72px 255.308px;"
                id="ellwmrq96sgza" class="animable"></path>
            <path
                d="M411.14,263.1c-1.55,2.81-3.33,5.5-5,8.24s-3.16,5.4-4.68,8.15q-4.58,8.31-8.46,17-1.92,4.29-3.62,8.67a65.18,65.18,0,0,0-3,9,24.47,24.47,0,0,0-.4,9.3,63.39,63.39,0,0,0,2.41,9.29,166.1,166.1,0,0,0,7.71,20.48c.1.22.47.05.39-.17-2.16-6.09-4.4-12.15-6.33-18.31-1.88-6-4.11-12.17-3.07-18.51a47.6,47.6,0,0,1,2.59-8.91c1.1-3,2.29-5.89,3.54-8.78,2.48-5.71,5.27-11.25,8.11-16.78,1.59-3.1,3.27-6.15,4.88-9.24s3.2-6.29,5-9.29C411.33,263.09,411.19,263,411.14,263.1Z"
                style="fill: rgb(38, 50, 56); transform-origin: 398.484px 308.195px;"
                id="el3enaou3mwgm" class="animable"></path>
            <path
                d="M440.87,257.11c-.64-.33-1.62,0-2.32,0a20.3,20.3,0,0,1-2.7-.08,21.48,21.48,0,0,1-2.63-.42,5.81,5.81,0,0,1-2.44-1,12.77,12.77,0,0,1-2.78-3.84,19.74,19.74,0,0,1-1.95-4.73c0-.1-.16,0-.15.05.17.93.26,1.87.51,2.79a16.1,16.1,0,0,0,.94,2.54,10.24,10.24,0,0,0,2.85,4.22c1.45,1.09,3.46,1.29,5.21,1.42a20.57,20.57,0,0,0,3,0c.73-.06,1.94,0,2.48-.59A.22.22,0,0,0,440.87,257.11Z"
                style="fill: rgb(38, 50, 56); transform-origin: 433.437px 252.556px;"
                id="elt6bscpro8tn" class="animable"></path>
            <path
                d="M451.27,391.52q-7.45-15.18-14.56-30.55T422.8,330a39.83,39.83,0,0,1-2.95-7.64c-.62-2.9.28-5.51,1.5-8.11A139.7,139.7,0,0,1,429,300.43c2.78-4.5,5.71-8.89,8.6-13.31a138.25,138.25,0,0,0,8.25-13.44,24.7,24.7,0,0,0,2.85-14.29c-.64-5-2.8-9.67-5.11-14.07l-1.86-3.48c0-.09-.18,0-.13.08,2.58,4.62,5.06,9.47,6.26,14.65a23.72,23.72,0,0,1,.57,7.83,24.64,24.64,0,0,1-2.22,7.65c-2.14,4.72-5.13,9.06-8,13.39s-5.83,8.81-8.64,13.28a150.22,150.22,0,0,0-7.86,13.87,20.85,20.85,0,0,0-2.44,6.73c-.28,2.61.67,5.12,1.68,7.48,4.39,10.29,9,20.49,13.7,30.65s9.56,20.32,14.5,30.41l1.88,3.81C451.12,391.83,451.35,391.68,451.27,391.52Z"
                style="fill: rgb(38, 50, 56); transform-origin: 435.253px 316.77px;"
                id="ell918q0xsk3" class="animable"></path>
            <path
                d="M409.19,203.68c-3.6,5.12-23.57,21.89-41.36,22.87-6.05.34-34.21-17.45-39.56-20.82-6.26-3.94,6.2-20.4,10.5-19.68,5.36.9,27.4,19.72,31.17,19.82,6.06.16,22.3-5.82,34.84-8.47C411.24,196,412,199.74,409.19,203.68Z"
                style="fill: rgb(221, 106, 87); transform-origin: 368.641px 206.291px;"
                id="el29qsqsylig3" class="animable"></path>
            <path
                d="M409.22,205.5C404.8,212.13,390,223,390,223L388,218.48l-6.91-15s13.59-4.39,22.54-6.36a19.86,19.86,0,0,1,3.21-.48C412.51,196.27,413,199.8,409.22,205.5Z"
                style="fill: rgb(235, 235, 235); transform-origin: 396.373px 209.807px;"
                id="elo66g00j2i6" class="animable"></path>
            <path
                d="M392.35,200.91a6.67,6.67,0,0,1,.25,1.92,6.34,6.34,0,0,1-.25,1.92,7.5,7.5,0,0,1,0-3.84Z"
                style="fill: rgb(255, 255, 255); transform-origin: 392.351px 202.83px;"
                id="eljwxuewtfdt" class="animable"></path>
            <path d="M390.52,208.67a7.46,7.46,0,0,1-3.83,0,7.46,7.46,0,0,1,3.83,0Z"
                style="fill: rgb(255, 255, 255); transform-origin: 388.605px 208.67px;"
                id="elgu78rjyb5yi" class="animable"></path>
            <path
                d="M409.92,197.94a6.67,6.67,0,0,1-1.92.25,6.34,6.34,0,0,1-1.92-.25,7.5,7.5,0,0,1,3.84,0Z"
                style="fill: rgb(255, 255, 255); transform-origin: 408px 197.941px;"
                id="el3lxgwe0qhfw" class="animable"></path>
            <path
                d="M399.34,205.73a7.17,7.17,0,0,1,1.53,1.18,6.58,6.58,0,0,1,1.18,1.53,7.54,7.54,0,0,1-2.71-2.71Z"
                style="fill: rgb(255, 255, 255); transform-origin: 400.695px 207.085px;"
                id="eluzgx1x5rc9" class="animable"></path>
            <path
                d="M392,214.87a7.17,7.17,0,0,1,1.53,1.18,6.58,6.58,0,0,1,1.18,1.53,6.82,6.82,0,0,1-1.53-1.17A6.92,6.92,0,0,1,392,214.87Z"
                style="fill: rgb(255, 255, 255); transform-origin: 393.355px 216.225px;"
                id="elqwzfor8xybh" class="animable"></path>
            <path
                d="M409.22,205.5C404.8,212.13,390,223,390,223L388,218.48c5.49-6.46,14-16.24,18.84-21.87C412.51,196.27,413,199.8,409.22,205.5Z"
                style="fill: rgb(199, 199, 199); transform-origin: 399.828px 209.794px;"
                id="elflzuw83c5wm" class="animable"></path>
            <path
                d="M392.69,220c-1.14-2.76-6.25-13.91-7.52-16.24-.09-.17-.21-.15-.14,0A166.75,166.75,0,0,0,392.58,220C392.62,220.06,392.72,220,392.69,220Z"
                style="fill: rgb(38, 50, 56); transform-origin: 388.852px 211.833px;"
                id="el02ynozcbc09g" class="animable"></path>
            <path
                d="M397.24,214.44a42,42,0,0,0-.2,4.22s0-.11,0-.16c-.17-.76-.32-1.54-.55-2.29a0,0,0,0,0-.08,0,12.43,12.43,0,0,0,.39,2.34c.09.36.18.72.28,1.08,0,.64,0,1.27.08,1.89.08,1.19.49,6.24.62,7.11,0,.18.24.17.26,0,.06-.91-.14-6.15-.16-7.33a65.35,65.35,0,0,0-.51-6.85C397.32,214.37,397.24,214.39,397.24,214.44Z"
                style="fill: rgb(38, 50, 56); transform-origin: 397.231px 221.579px;"
                id="eln3k09n7selh" class="animable"></path>
            <path
                d="M400.54,252.26c2,1.41,4.53,3.51,17.37,2.79.8-.05,1.61-.13,2.43-.25,12.21-1.89,28.19-13.72,29.11-14.58,0,0-14.4-32.77-36.89-45.57-2.78-1.58-8,0-11.06,2.44-1.1.87-4.23,8-4.26,14.09S398.53,250.86,400.54,252.26Z"
                style="fill: rgb(235, 235, 235); transform-origin: 423.345px 224.606px;"
                id="el7gb2pecwk9d" class="animable"></path>
            <path
                d="M407.83,212.05a6.67,6.67,0,0,1,.25,1.92,6.56,6.56,0,0,1-.25,1.91,6.91,6.91,0,0,1-.25-1.91A7,7,0,0,1,407.83,212.05Z"
                style="fill: rgb(255, 255, 255); transform-origin: 407.83px 213.965px;"
                id="el5o9mbsn40wy" class="animable"></path>
            <path d="M413,234.05a7.5,7.5,0,0,1,0,3.84,7.5,7.5,0,0,1,0-3.84Z"
                style="fill: rgb(255, 255, 255); transform-origin: 413px 235.97px;"
                id="elptfwq43ohjg" class="animable"></path>
            <path d="M429,220.44a7.5,7.5,0,0,1,0,3.84,7.5,7.5,0,0,1,0-3.84Z"
                style="fill: rgb(255, 255, 255); transform-origin: 429px 222.36px;"
                id="elhyd5dvyegia" class="animable"></path>
            <path
                d="M399.75,231.14a6.67,6.67,0,0,1,.25,1.92,6.56,6.56,0,0,1-.25,1.91,6.91,6.91,0,0,1-.25-1.91A7,7,0,0,1,399.75,231.14Z"
                style="fill: rgb(255, 255, 255); transform-origin: 399.75px 233.055px;"
                id="elw07ouv9xnz" class="animable"></path>
            <path
                d="M419.86,216.45a6.67,6.67,0,0,1-1.92.25,6.6,6.6,0,0,1-1.91-.25,7,7,0,0,1,1.91-.25A7,7,0,0,1,419.86,216.45Z"
                style="fill: rgb(255, 255, 255); transform-origin: 417.945px 216.45px;"
                id="elz444o6im17k" class="animable"></path>
            <path d="M433.45,233.48a7.46,7.46,0,0,1-3.83,0,7.46,7.46,0,0,1,3.83,0Z"
                style="fill: rgb(255, 255, 255); transform-origin: 431.535px 233.48px;"
                id="elznx2x6m9fte" class="animable"></path>
            <path d="M412.79,247a7.46,7.46,0,0,1-3.83,0,7.46,7.46,0,0,1,3.83,0Z"
                style="fill: rgb(255, 255, 255); transform-origin: 410.875px 247px;"
                id="elrvypoat8vv" class="animable"></path>
            <path
                d="M436.85,244.39a7,7,0,0,1-1.91.25,7,7,0,0,1-1.92-.25,6.67,6.67,0,0,1,1.92-.25A6.6,6.6,0,0,1,436.85,244.39Z"
                style="fill: rgb(255, 255, 255); transform-origin: 434.935px 244.39px;"
                id="elt93v52wz218" class="animable"></path>
            <path
                d="M409.92,197.94a6.67,6.67,0,0,1-1.92.25,6.34,6.34,0,0,1-1.92-.25,7.5,7.5,0,0,1,3.84,0Z"
                style="fill: rgb(255, 255, 255); transform-origin: 408px 197.941px;"
                id="elmt3g5rc1bta" class="animable"></path>
            <path
                d="M416.59,200.43a7.54,7.54,0,0,1,2.71,2.71,6.37,6.37,0,0,1-1.53-1.18A6.58,6.58,0,0,1,416.59,200.43Z"
                style="fill: rgb(255, 255, 255); transform-origin: 417.945px 201.785px;"
                id="elaojrjukml9" class="animable"></path>
            <path d="M436.55,221.79a7.54,7.54,0,0,1,2.71,2.71,7.34,7.34,0,0,1-2.71-2.71Z"
                style="fill: rgb(255, 255, 255); transform-origin: 437.905px 223.145px;"
                id="elx2p9onx261" class="animable"></path>
            <path
                d="M404.63,224.08a7.54,7.54,0,0,1,2.71,2.71,6.37,6.37,0,0,1-1.53-1.18A6.58,6.58,0,0,1,404.63,224.08Z"
                style="fill: rgb(255, 255, 255); transform-origin: 405.985px 225.435px;"
                id="elj3xwex5ci9" class="animable"></path>
            <path
                d="M422.94,239.51a6.93,6.93,0,0,1,1.53,1.18,6.58,6.58,0,0,1,1.18,1.53,6.82,6.82,0,0,1-1.53-1.17A7.23,7.23,0,0,1,422.94,239.51Z"
                style="fill: rgb(255, 255, 255); transform-origin: 424.295px 240.865px;"
                id="elokdgv75dem" class="animable"></path>
            <path
                d="M399.34,205.73a7.17,7.17,0,0,1,1.53,1.18,6.58,6.58,0,0,1,1.18,1.53,7.54,7.54,0,0,1-2.71-2.71Z"
                style="fill: rgb(255, 255, 255); transform-origin: 400.695px 207.085px;"
                id="elfrnz1k3m6o7" class="animable"></path>
            <path
                d="M397.72,220.44a6.86,6.86,0,0,1,1.18-1.53,7.17,7.17,0,0,1,1.53-1.18,6.63,6.63,0,0,1-1.18,1.54A6.82,6.82,0,0,1,397.72,220.44Z"
                style="fill: rgb(255, 255, 255); transform-origin: 399.075px 219.085px;"
                id="elaptivmxcjw" class="animable"></path>
            <path
                d="M441.06,236.76a6.79,6.79,0,0,1,1.18-1.53,7.17,7.17,0,0,1,1.53-1.18,6.43,6.43,0,0,1-1.18,1.54A6.82,6.82,0,0,1,441.06,236.76Z"
                style="fill: rgb(255, 255, 255); transform-origin: 442.415px 235.405px;"
                id="ellives5njcz" class="animable"></path>
            <path
                d="M400.08,243.3a7.54,7.54,0,0,1,2.71-2.71,6.63,6.63,0,0,1-1.18,1.54A6.82,6.82,0,0,1,400.08,243.3Z"
                style="fill: rgb(255, 255, 255); transform-origin: 401.435px 241.945px;"
                id="el2a169hamguq" class="animable"></path>
            <path
                d="M424.55,211.82a6.82,6.82,0,0,1,1.17-1.53,6.63,6.63,0,0,1,1.54-1.18,7.54,7.54,0,0,1-2.71,2.71Z"
                style="fill: rgb(255, 255, 255); transform-origin: 425.905px 210.465px;"
                id="el5rnd92c0k8" class="animable"></path>
            <path
                d="M418.48,252.83a6.58,6.58,0,0,1,1.18-1.53,7.17,7.17,0,0,1,1.53-1.18,6.37,6.37,0,0,1-1.18,1.53A6.58,6.58,0,0,1,418.48,252.83Z"
                style="fill: rgb(255, 255, 255); transform-origin: 419.835px 251.475px;"
                id="el4snq79px0s9" class="animable"></path>
            <path d="M418.5,228.14a7.54,7.54,0,0,1,2.71-2.71,7.15,7.15,0,0,1-2.71,2.71Z"
                style="fill: rgb(255, 255, 255); transform-origin: 419.855px 226.785px;"
                id="els7bhh1lm9pn" class="animable"></path>
            <path
                d="M404.76,205.73c3.11-.14,6.85-6,7.79-10.2a61.07,61.07,0,0,0-2.28-5.89c-.73-1.89-1.5-4-2.07-6-.11-.41-1.29.74-1.29.74l-2.39,1.35-7.9,4.48a32.75,32.75,0,0,1,3.37,7.27,4.38,4.38,0,0,1,.15.84s0,.09,0,.14C400.35,200.09,401.75,205.86,404.76,205.73Z"
                style="fill: rgb(221, 106, 87); transform-origin: 404.585px 194.642px;"
                id="elxoag8rxcrl" class="animable"></path>
            <path
                d="M400.14,198.33s0,.09,0,.14a6.89,6.89,0,0,0,1.3-.3c8.32-2.57,6.33-13.52,6.33-13.52l-3.27,1.09-7.9,4.48a32.75,32.75,0,0,1,3.37,7.27A4.38,4.38,0,0,1,400.14,198.33Z"
                style="fill: rgb(38, 50, 56); transform-origin: 402.289px 191.56px;"
                id="el3lr8bfadlff" class="animable"></path>
            <path
                d="M409,171.32c1.56,4.54-.41,17.87-3.57,20.93-4.58,4.44-12.3,5.12-16.13-.44-3.72-5.39-.85-22.71,2.7-25.51C397.19,162.16,406.66,164.62,409,171.32Z"
                style="fill: rgb(221, 106, 87); transform-origin: 398.552px 180.027px;"
                id="elghi0n0wh3zd" class="animable"></path>
            <path
                d="M396.64,180.36s.06.06.05.09c-.15.9-.18,2,.59,2.36,0,0,0,.06,0,.05C396.29,182.58,396.34,181.19,396.64,180.36Z"
                style="fill: rgb(38, 50, 56); transform-origin: 396.865px 181.611px;"
                id="elre4dkt9ayv8" class="animable"></path>
            <path d="M397.57,179.54c1.46.1,1.16,3-.19,2.92S396.35,179.46,397.57,179.54Z"
                style="fill: rgb(38, 50, 56); transform-origin: 397.519px 181px;" id="elrdbd5loiqhf"
                class="animable"></path>
            <path
                d="M391.11,179.67s-.07,0-.08.08c-.06.9-.29,1.93-1.13,2.14,0,0,0,.05,0,.05C390.91,181.91,391.2,180.54,391.11,179.67Z"
                style="fill: rgb(38, 50, 56); transform-origin: 390.513px 180.805px;"
                id="elazc9rlmqknc" class="animable"></path>
            <path d="M390.4,178.65c-1.44-.26-1.85,2.64-.52,2.88S391.61,178.86,390.4,178.65Z"
                style="fill: rgb(38, 50, 56); transform-origin: 390.098px 180.089px;"
                id="elfobwlcdq7ar" class="animable"></path>
            <path
                d="M398.86,178.33a10.88,10.88,0,0,1-1.09-.52,2,2,0,0,1-1-.73.62.62,0,0,1,.18-.74,1.53,1.53,0,0,1,1.55,0,2.25,2.25,0,0,1,1.2,1.11A.66.66,0,0,1,398.86,178.33Z"
                style="fill: rgb(38, 50, 56); transform-origin: 398.235px 177.251px;"
                id="eli3wctpjsp6e" class="animable"></path>
            <path
                d="M389.43,177.06a9.78,9.78,0,0,0,1.19-.18,1.89,1.89,0,0,0,1.17-.41.63.63,0,0,0,0-.76,1.55,1.55,0,0,0-1.5-.44,2.23,2.23,0,0,0-1.45.71A.66.66,0,0,0,389.43,177.06Z"
                style="fill: rgb(38, 50, 56); transform-origin: 390.301px 176.145px;"
                id="elyuznvhc02ss" class="animable"></path>
            <path
                d="M396.57,188.52c-.24.19-.48.46-.81.46a2.51,2.51,0,0,1-.95-.33,0,0,0,0,0,0,0,1.22,1.22,0,0,0,1.09.61,1,1,0,0,0,.79-.73S396.61,188.5,396.57,188.52Z"
                style="fill: rgb(38, 50, 56); transform-origin: 395.75px 188.887px;"
                id="elu4a31rclzys" class="animable"></path>
            <path
                d="M395.9,185.72a3.09,3.09,0,0,1-2.19,1.16,4.12,4.12,0,0,1-1.11-.06l-.21,0-.2-.05a.24.24,0,0,1-.16-.22h0a.28.28,0,0,1,0-.09h0v-.07c.06-.7.23-1.75.23-1.75-.26.1-1.62.55-1.56.19a46.36,46.36,0,0,1,2.15-9.18.08.08,0,0,1,.16,0c-.36,2.89-1.22,5.7-1.62,8.59a5.75,5.75,0,0,1,1.49-.29c.1,0-.37,2-.37,2.34v0a4.26,4.26,0,0,0,3.28-.66C395.9,185.59,396,185.66,395.9,185.72Z"
                style="fill: rgb(38, 50, 56); transform-origin: 393.32px 181.232px;"
                id="el265a2d1s119h" class="animable"></path>
            <path
                d="M393,186.51a3.67,3.67,0,0,0,1.35,1.28,1.66,1.66,0,0,0,1,.16c.74-.11.82-.77.75-1.35a4,4,0,0,0-.23-.9A4.77,4.77,0,0,1,393,186.51Z"
                style="fill: rgb(38, 50, 56); transform-origin: 394.56px 186.834px;"
                id="elvzlrs1f2uu" class="animable"></path>
            <path
                d="M394.39,187.79a1.66,1.66,0,0,0,1,.16c.74-.11.82-.77.75-1.35A1.69,1.69,0,0,0,394.39,187.79Z"
                style="fill: rgb(255, 153, 186); transform-origin: 395.275px 187.282px;"
                id="eldcf8zl9fxr" class="animable"></path>
            <path
                d="M407.8,182.44c-2.29-.2-1.91-5.82-1.91-5.82s-3.49-.73-5.07-5.6c0,0-4.6,2.71-8.37,1.91-5.9-1.25-5.52-9-3.25-10.47,3.21-2.13,8.73,1.27,8.73,1.27s8.55-2.12,10.91,3.7a4.35,4.35,0,0,1,3.92,4.46C412.9,176.08,409.51,182.59,407.8,182.44Z"
                style="fill: rgb(38, 50, 56); transform-origin: 400.214px 172.101px;"
                id="el7tbdijzamfw" class="animable"></path>
            <path
                d="M406.69,177.3a7.77,7.77,0,0,1-4.36-2.55,5.84,5.84,0,0,1-1.2-5.23.08.08,0,0,0-.15,0,6.72,6.72,0,0,0,.78,5.66,5.43,5.43,0,0,0,4.92,2.33A.09.09,0,0,0,406.69,177.3Z"
                style="fill: rgb(38, 50, 56); transform-origin: 403.732px 173.498px;"
                id="eltk0ng9kqe2" class="animable"></path>
            <path
                d="M413.14,169.45c-1.13-1.52-2.91-1.8-4.67-1.79-.1,0-.1.17,0,.16a4.9,4.9,0,0,1,4.32,2.51A6,6,0,0,1,413,175a12.29,12.29,0,0,1-5.13,7.2s0,.1,0,.07a12.33,12.33,0,0,0,5.76-7.88C414,172.8,414.17,170.85,413.14,169.45Z"
                style="fill: rgb(38, 50, 56); transform-origin: 410.894px 174.968px;"
                id="eljd4p3ld1sf" class="animable"></path>
            <path
                d="M398.15,164a5.79,5.79,0,0,0-3.19-2.59,6.92,6.92,0,0,0-4.94.36,3.88,3.88,0,0,0-2.15,3.27,7,7,0,0,0,1.43,4.43s.08,0,.06,0a6.87,6.87,0,0,1-1.1-4,3.59,3.59,0,0,1,2.21-3.13c2.47-1,6-.73,7.55,1.79C398.07,164.19,398.2,164.1,398.15,164Z"
                style="fill: rgb(38, 50, 56); transform-origin: 393.014px 165.292px;"
                id="elaa49fdf67lc" class="animable"></path>
            <path d="M406.5,182.21s2.93-4.32,4.89-3.28-.2,7.28-2.47,8.16a2.33,2.33,0,0,1-3.13-1.2Z"
                style="fill: rgb(221, 106, 87); transform-origin: 408.973px 183.039px;"
                id="el6nst3yxn53w" class="animable"></path>
            <path
                d="M410.73,180.7a0,0,0,0,1,0,.06,5.88,5.88,0,0,0-3,3.72,1.28,1.28,0,0,1,1.91-.38c.05,0,0,.09,0,.08a1.42,1.42,0,0,0-1.56.52,6.85,6.85,0,0,0-.74,1.29c-.07.14-.33.07-.28-.1l0,0C407,183.82,408.54,180.94,410.73,180.7Z"
                style="fill: rgb(38, 50, 56); transform-origin: 408.892px 183.382px;"
                id="elkw1wab9g9p" class="animable"></path>
            <g id="el4n8ddawux8g">
                <rect x="256.48" y="187.63" width="121.5" height="85.08"
                    style="fill: rgb(38, 50, 56); transform-origin: 317.23px 230.17px; transform: rotate(180deg);"
                    class="animable"></rect>
            </g>
            <circle cx="280.75" cy="211.82" r="10.07"
                style="fill: rgb(25, 135, 84); transform-origin: 280.75px 211.82px;"
                id="eljftelb3dsur" class="animable"></circle>
            <polygon points="310.43 254.21 378 254.21 344.21 208.41 310.43 254.21"
                style="fill: rgb(199, 199, 199); transform-origin: 344.215px 231.31px;"
                id="elj1d795z9d5" class="animable"></polygon>
            <polygon points="283.95 254.42 339.73 254.42 311.84 224.61 283.95 254.42"
                style="fill: rgb(255, 255, 255); transform-origin: 311.84px 239.515px;"
                id="els43w6oji7wq" class="animable"></polygon>
            <rect x="256.48" y="254.38" width="121.5" height="18.33"
                style="fill: rgb(25, 135, 84); transform-origin: 317.23px 263.545px;"
                id="elxyaqluxc88s" class="animable"></rect>
            <path
                d="M420.41,205c3.15,8.81-1.35,41.13-6.68,47.94-7.91,10.14-23.54,19.47-29.52,22.38-2.6,1.27-14.31-17.44-11.76-19.19,5.47-3.76,22.94-12.72,24.42-14.5s9.44-18.88,12.63-28.51C413.78,200.2,418.82,200.53,420.41,205Z"
                style="fill: rgb(221, 106, 87); transform-origin: 396.771px 238.79px;"
                id="elhdwurvwj4w" class="animable"></path>
            <path
                d="M384.2,275.37c-8.29,4.73-24.78,4-27,3.34-1.91-.57-2.9-.89-2.9-.89-3.46-1-4.39-2.89-4.39-2.89s-4.33.06-4.8-2.56c-.53-2.92,5.65-2.43,9.22-4.24,8.18-4.14,18.65-12.32,20.89-13.75Z"
                style="fill: rgb(221, 106, 87); transform-origin: 364.639px 266.786px;"
                id="elk7mveqodua" class="animable"></path>
            <path
                d="M365.93,269.81a58.15,58.15,0,0,1-7.37,3.23,60.29,60.29,0,0,1-8.62,1.81.07.07,0,0,0,0,.14A31.29,31.29,0,0,0,366,270,.12.12,0,0,0,365.93,269.81Z"
                style="fill: rgb(38, 50, 56); transform-origin: 357.947px 272.4px;"
                id="elgsqzoklu4e6" class="animable"></path>
            <path
                d="M369.14,274.39a43.31,43.31,0,0,1-14.87,3.34s0,0,0,0a28.12,28.12,0,0,0,15-3.14C369.38,274.56,369.31,274.32,369.14,274.39Z"
                style="fill: rgb(38, 50, 56); transform-origin: 361.796px 276.088px;"
                id="eltehinhtlahh" class="animable"></path>
            <path
                d="M363.84,262.52c.85-1,.36-1.42-1.89-1s-10.79,3.93-11.77.85,11.15-7.88,14.94-8.28a63.74,63.74,0,0,1,10.27.3C373.22,255.79,368.07,259.7,363.84,262.52Z"
                style="fill: rgb(221, 106, 87); transform-origin: 362.757px 258.815px;"
                id="eluz6ulmjtvof" class="animable"></path>
            <path
                d="M411.6,207.2c5.53-11.62,10.57-8.54,11,3a183.29,183.29,0,0,1-1.06,23.92l-20-5.74Z"
                style="fill: rgb(235, 235, 235); transform-origin: 412.09px 216.994px;"
                id="elclxy09vdb66" class="animable"></path>
            <path
                d="M407.83,212.05a6.67,6.67,0,0,1,.25,1.92,6.56,6.56,0,0,1-.25,1.91,6.91,6.91,0,0,1-.25-1.91A7,7,0,0,1,407.83,212.05Z"
                style="fill: rgb(255, 255, 255); transform-origin: 407.83px 213.965px;"
                id="ellb6fmd7h1xi" class="animable"></path>
            <path
                d="M419.86,216.45a6.67,6.67,0,0,1-1.92.25,6.6,6.6,0,0,1-1.91-.25,7,7,0,0,1,1.91-.25A7,7,0,0,1,419.86,216.45Z"
                style="fill: rgb(255, 255, 255); transform-origin: 417.945px 216.45px;"
                id="elxq9k5i9gjaj" class="animable"></path>
            <path
                d="M416.59,200.43a7.54,7.54,0,0,1,2.71,2.71,6.37,6.37,0,0,1-1.53-1.18A6.58,6.58,0,0,1,416.59,200.43Z"
                style="fill: rgb(255, 255, 255); transform-origin: 417.945px 201.785px;"
                id="elnshrq37xf1a" class="animable"></path>
            <path
                d="M404.63,224.08a7.54,7.54,0,0,1,2.71,2.71,6.37,6.37,0,0,1-1.53-1.18A6.58,6.58,0,0,1,404.63,224.08Z"
                style="fill: rgb(255, 255, 255); transform-origin: 405.985px 225.435px;"
                id="ele2xzn3wnrhv" class="animable"></path>
            <path d="M418.5,228.14a7.54,7.54,0,0,1,2.71-2.71,7.15,7.15,0,0,1-2.71,2.71Z"
                style="fill: rgb(255, 255, 255); transform-origin: 419.855px 226.785px;"
                id="elacco6ikok75" class="animable"></path>
            <path
                d="M409.69,210.75c-.75,1.52-1.54,3-2.33,4.53.14-.72.25-1.43.33-2.16,0,0-.05,0-.05,0-.12.57-.25,1.13-.36,1.7l-.15.82a1.16,1.16,0,0,0,0,.18c-.61,1.17-1.22,2.35-1.79,3.54-.69,1.42-1.34,2.85-2,4.29s-1.27,3.19-2,4.64a10.37,10.37,0,0,0,1.95.58c.18.07.27-.11.08-.13s-1.67-.63-1.69-.64c.65-1.45,1.47-2.82,2.17-4.24s1.4-2.83,2.06-4.27c1.36-2.91,2.55-5.89,3.89-8.81C409.76,210.73,409.7,210.71,409.69,210.75Z"
                style="fill: rgb(38, 50, 56); transform-origin: 405.57px 219.807px;"
                id="eldwdsvx6ib9j" class="animable"></path>
            <path
                d="M423.49,217.67c-.19.6-.4,1.19-.55,1.8l-.18.75c.07-2.08.14-4.15.2-6.23,0,0,0,0,0,0-.28,3.39-.58,6.78-.8,10.18a97,97,0,0,0-.45,9.79,11.42,11.42,0,0,0-1.83-.29,7.94,7.94,0,0,0,2.06.59,99.67,99.67,0,0,0,.71-10.22c0-.94.07-1.87.11-2.8.11-.58.27-1.15.43-1.72s.27-1.22.4-1.83C423.56,217.65,423.5,217.64,423.49,217.67Z"
                style="fill: rgb(38, 50, 56); transform-origin: 421.735px 224.125px;"
                id="elob1x72cs29p" class="animable"></path>
            <path
                d="M420.76,231c-2.82-1-14.51-4.69-17.09-5.32-.18-.05-.25,0-.07.12a164.65,164.65,0,0,0,17.12,5.31A.06.06,0,0,0,420.76,231Z"
                style="fill: rgb(38, 50, 56); transform-origin: 412.141px 228.386px;"
                id="elxpqekp72ip8" class="animable"></path>
            <path
                d="M317.09,201.91c2.76.84,2.18-2.9,2.18-2.9s2.14,5.18,5.33,5,2.2-4.73,2.15-5.05c.11.27,2.21,5,5.39,4.42s1.66-5,1.55-5.23c.19.22,2.76,3.14,5.07,2.16,4-1.68-2.37-9.32-1.91-12.79l5.6.17c.18,0,.37,0,.55-.09l.21-2.86a36.25,36.25,0,0,1-5.17-2.6c-2.11-1.18-4.15-2.26-5.66-2.29a3.18,3.18,0,0,0-3.16,2.09s-1.64-2.6-4.16-2.23c-1.29.19-2.13,2.43-2.13,2.43a3.77,3.77,0,0,0-3.62-1.56c-1.77.36-2.35,2.55-2.35,2.55s-2.24-1.32-3.93-.36C309.62,184.65,311.17,200.09,317.09,201.91Z"
                style="fill: rgb(221, 106, 87); transform-origin: 327.228px 191.844px;"
                id="el3j6jdiux7cd" class="animable"></path>
            <path
                d="M337.57,187.19l4.88.45c.18,0,.37,0,.55-.09,6.16-1.12,10-8.16,5.53-8.67-3.4-.39-7.06,4.11-10.49,3.21h0Z"
                style="fill: rgb(221, 106, 87); transform-origin: 344.021px 183.248px;"
                id="elqiq1syr8lu8" class="animable"></path>
            <path
                d="M316.82,183.41a0,0,0,0,0-.08,0,26.86,26.86,0,0,0,2.54,15.81c.08.16.36.09.3-.09A55.22,55.22,0,0,1,316.82,183.41Z"
                style="fill: rgb(38, 50, 56); transform-origin: 318.026px 191.36px;"
                id="elwrfjgw74r68" class="animable"></path>
            <path
                d="M322.89,182c0-.06-.1-.06-.11,0a25.19,25.19,0,0,0,3.84,17.07c.12.17.4.21.28,0C324.83,195.56,323,187,322.89,182Z"
                style="fill: rgb(38, 50, 56); transform-origin: 324.743px 190.584px;"
                id="elnt0ewyx0et" class="animable"></path>
            <path
                d="M334.05,198.37c-3.15-5-4.4-10.45-4.87-16.26,0-.08-.11-.06-.13,0-.54,2.91.15,6.58.92,9.39a15.62,15.62,0,0,0,3.91,7C334,198.55,334.12,198.47,334.05,198.37Z"
                style="fill: rgb(38, 50, 56); transform-origin: 331.464px 190.286px;"
                id="eld0bpdxiiuaq" class="animable"></path>
        </g>
        <defs>
            <filter id="active" height="200%">
                <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2">
                </feMorphology>
                <feFlood flood-color="#32DFEC" flood-opacity="1" result="PINK"></feFlood>
                <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>
                <feMerge>
                    <feMergeNode in="OUTLINE"></feMergeNode>
                    <feMergeNode in="SourceGraphic"></feMergeNode>
                </feMerge>
            </filter>
            <filter id="hover" height="200%">
                <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2">
                </feMorphology>
                <feFlood flood-color="#ff0000" flood-opacity="0.5" result="PINK"></feFlood>
                <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>
                <feMerge>
                    <feMergeNode in="OUTLINE"></feMergeNode>
                    <feMergeNode in="SourceGraphic"></feMergeNode>
                </feMerge>
                <feColorMatrix type="matrix"
                    values="0   0   0   0   0                0   1   0   0   0                0   0   0   0   0                0   0   0   1   0 ">
                </feColorMatrix>
            </filter>
        </defs>
    </svg>
</div>
<p class="text-center">Oops! Nampaknya Kamu belum pernah membuat artikel, yuk mulai buat artikel
    pertama-Mu!
</p>
<!-- itutup ilustrasi -->


<!-- pagination -->
<nav aria-label="Page navigation">
    <ul class="pagination justify-content-center mt-5">
        <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
            </a>
        </li>
        <li class="page-item active"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li>
    </ul>
</nav>
</div>
            </div>
        </div>
    </main>
@endsection