<section id="loader" class="bg-white w-full h-screen flex fixed justify-center items-center ">
    <div class="w-full h-full flex p-5 bg-white flex-col items-center justify-center gap-10">
        <img class="w-48 md:w-72 z-50" src="https://www.psicoalianza.com/build/img/GIF-LOGO-600px.gif">
        <span class="text-center text-md font-bold">Bienvenidos al futuro de la gestión humana</span>
    </div>
</section>

<script>
    const StartloadTime = performance.now();
    window.addEventListener("load", contentLoding);
    function contentLoding (){
        const EndloadTime = performance.now();
        console.log(`Took ${EndloadTime - StartloadTime} mls.`);
        contentLoaded();
    }
    function contentLoaded() {
        document.querySelector("#loader").classList.add("fadeOut")
        setTimeout(() => {
            document.querySelector("#loader").classList.add("hidden")
        }, 500);
    }
</script>