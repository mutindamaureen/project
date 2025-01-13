<!DOCTYPE html>
<html>
<head>
    @include('pages.style')
</head>
<body class="light" onload="loading()">
<script>localStorage.getItem("pref-theme")==="dark"?document.body.classList.add('dark'):localStorage.getItem("pref-theme")==="light"?document.body.classList.remove('dark'):window.matchMedia('(prefers-color-scheme: dark)').matches&&document.body.classList.add('dark')</script>
@include('pages.header')
<div id="content">
    <section id="hero" class="py-5 align-middle">
        @include('pages.intro')
    </section>
<section id="about" class="py-0 py-sm-5">
    @include('pages.about')
</section>
<section id="experience" class="py-5">
    {{-- @include('pages.experience') --}}
</section>
<section id="education" class="py-5">
    @include('pages.education')
</section>
<section id="projects" class="py-5">
    @include('pages.projects')
</section>
<section id="achievements" class="py-5">
    {{-- @include('pages.cert') --}}
</section>
<section id="contact" class="py-5">
    @include('pages.contact')
</section>
</div>
<footer>
    {{-- @include('pages.footer') --}}
</footer>
<script src="js/js-bootstrap.bundle.min.js"></script>
<script>localStorage.getItem("pref-theme")==="dark"?document.body.classList.add('dark'):localStorage.getItem("pref-theme")==="light"?document.body.classList.remove('dark'):window.matchMedia('(prefers-color-scheme: dark)').matches&&document.body.classList.add('dark')</script>
<script>var tooltipTriggerList,tooltipList;document.getElementById("theme-toggle").addEventListener("click",()=>{document.body.className.includes("dark")?(document.body.classList.remove('dark'),localStorage.setItem("pref-theme",'light')):(document.body.classList.add('dark'),localStorage.setItem("pref-theme",'dark'))}),tooltipTriggerList=[].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]')),tooltipList=tooltipTriggerList.map(function(a){return new bootstrap.Tooltip(a)})</script>
<script>let loadingIcons;function loading(){myVar=setTimeout(showPage,100)}function showPage(){try{document.getElementById("loading-icons").style.display="block"}catch(a){}}</script></body>
</html>
