@props(['title', 'id', 'name', 'route'])

<button type="button"
        command="show-modal"
        commandfor="delete-modal-{{ $id }}"
        {{ $attributes->merge(['']) }}
        title="Delete"
        class="text-red-600 cursor-pointer">
    Delete
</button>


<el-dialog>
    <dialog id="delete-modal-{{ $id }}" class="fixed inset-0 size-auto max-h-none max-w-none overflow-y-auto bg-transparent backdrop:bg-transparent">
        <el-dialog-backdrop class="fixed inset-0 bg-gray-900/80 transition-opacity"></el-dialog-backdrop>

        <div class="flex min-h-full items-center justify-center p-4">
            <el-dialog-panel class="relative transform overflow-hidden rounded-2xl bg-white text-left shadow-2xl border border-white/10 transition-all sm:w-full sm:max-w-lg">
                <div class="p-6">
                    <div class="sm:flex sm:items-start">
                        <div class="mx-auto flex size-10 shrink-0 items-center justify-center rounded-full bg-red-500/10 sm:mx-0">
                            <svg class="size-6 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                            </svg>
                        </div>
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                            <h3 class="text-lg font-semibold text-red-600">{{$title}}</h3>
                            <p class="mt-2 text-sm text-black">
                                Are you sure you want to delete <strong>{{ $name }}</strong>?
                            </p>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-200 px-6 py-4 gap-3 sm:flex sm:flex-row-reverse">
                    <form action="{{ $route }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="inline-flex w-full justify-center rounded-lg bg-red-600 px-4 py-2 text-sm font-semibold text-white hover:bg-red-500 transition-colors sm:w-auto">
                            Confirm Delete
                        </button>
                    </form>

                    <button type="button" command="close" commandfor="delete-modal-{{ $id }}" class="mt-3 inline-flex w-full justify-center rounded-lg bg-gray-400 px-4 py-2 text-sm font-semibold text-white hover:bg-white/10 transition-colors sm:mt-0 sm:w-auto">
                        Cancel
                    </button>
                </div>
            </el-dialog-panel>
        </div>
    </dialog>
</el-dialog>
<el-dialog>
    <dialog id="dialog" aria-labelledby="dialog-title" class="fixed inset-0 size-auto max-h-none max-w-none overflow-y-auto bg-transparent backdrop:bg-transparent">
        <el-dialog-backdrop class="fixed inset-0 bg-gray-900/50 transition-opacity data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in"></el-dialog-backdrop>

        <div tabindex="0" class="flex min-h-full items-end justify-center p-4 text-center focus:outline-none sm:items-center sm:p-0">
            <el-dialog-panel class="relative transform overflow-hidden rounded-lg bg-gray-800 text-left shadow-xl outline -outline-offset-1 outline-white/10 transition-all data-closed:translate-y-4 data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in sm:my-8 sm:w-full sm:max-w-lg data-closed:sm:translate-y-0 data-closed:sm:scale-95">
                <div class="bg-gray-800 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div class="mx-auto flex size-12 shrink-0 items-center justify-center rounded-full bg-red-500/10 sm:mx-0 sm:size-10">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 text-red-400">
                                <path d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                            <h3 id="dialog-title" class="text-base font-semibold text-white">Deactivate account</h3>
                            <div class="mt-2">
                                <p class="text-sm text-gray-400">Are you sure you want to deactivate your account? All of your data will be permanently removed. This action cannot be undone.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-700/25 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                    <button type="button" command="close" commandfor="dialog" class="inline-flex w-full justify-center rounded-md bg-red-500 px-3 py-2 text-sm font-semibold text-white hover:bg-red-400 sm:ml-3 sm:w-auto">Deactivate</button>
                    <button type="button" command="close" commandfor="dialog" class="mt-3 inline-flex w-full justify-center rounded-md bg-white/10 px-3 py-2 text-sm font-semibold text-white inset-ring inset-ring-white/5 hover:bg-white/20 sm:mt-0 sm:w-auto">Cancel</button>
                </div>
            </el-dialog-panel>
        </div>
    </dialog>
</el-dialog>
