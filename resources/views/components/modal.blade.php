
<div id="{{'modal_'.$id}}" class="flex items-center z-[100] fadeOut hidden overflow-hidden justify-center fixed bg-[#1e1e1ecc] w-full h-full">
    <div id="modal-content" class="flex m-5 shadow-lg rounded-lg flex-col justify-start items-center w-auto sm:w-[500px] md:w-[1000px] bg-white">
        <div class="p-5 rounded-t-md items-center w-full bg-mainblue-dark text-white font-bold flex justify-between">
            <span>{{$title}}</span>
            <button id="closeButton">
                <i class="fa-regular fa-circle-xmark text-xl"></i>
            </button>
        </div>
        <div class="p-5 w-full">
            {{ $slot }}
        </div>
    </div>
</div>
