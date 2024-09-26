
<div id="modal" class="flex items-center z-[100] fadeOut hidden overflow-hidden justify-center fixed bg-[#1e1e1ecc] w-full h-full">
    <div id="modal-content" class="flex shadow-lg rounded-lg flex-col justify-start items-center w-auto  bg-white">
        <div class="p-5 rounded-t-md items-center w-full bg-mainblue-dark text-white font-bold flex justify-between">
            <span>Title modal</span>
            <button id="closeButton">
                <i class="fa-regular fa-circle-xmark text-xl"></i>
            </button>
        </div>
        <div class="p-5">
            Content
            <div class="flex justify-between ">
                <button id="btn-cancel" class="bg-gray-300 w-44 font-bold rounded-full">Cancelar</button>
                <button class="btn-primary w-44">Guardar</button>
            </div>
        </div>
    </div>
</div> 

@push('javascripts')
<script defer>
const closeButton = document.getElementById("closeButton");
const openButton = document.querySelector("#openme");
const cancelButton = document.querySelector("#btn-cancel");

closeButton.addEventListener("click", closeModal);
openButton.addEventListener("click", openModal);
cancelButton.addEventListener("click", closeModal);

function closeModal() {
    document.querySelector("#modal").classList.add("fadeOut")
    document.querySelector("#modal").classList.remove("fadeIn")
    setTimeout(() => {
        document.querySelector("#modal").classList.add("hidden")
    }, 500);
}

function openModal() {
    document.querySelector("#modal").classList.add("fadeIn")
    document.querySelector("#modal").classList.remove("fadeOut")
    setTimeout(() => {
        document.querySelector("#modal").classList.remove("hidden")
    }, 500);
}

</script>
@endpush
