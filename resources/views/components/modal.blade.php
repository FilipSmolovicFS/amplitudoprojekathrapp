@props(['title' => 'Delete', 'id', 'name', 'route'])

<button type="button"
        command="show-modal"
        commandfor="delete-modal-{{ $id }}"
        {{ $attributes->merge(['']) }}
        title="Delete"
        class=" cursor-pointer">
    {{$title}}
</button>


<el-dialog>
    <dialog id="delete-modal-{{ $id }}" class="fixed inset-0 size-auto max-h-none max-w-none overflow-y-auto bg-transparent backdrop:bg-transparent">
        <el-dialog-backdrop class="fixed inset-0 bg-gray-900/80 transition-opacity"></el-dialog-backdrop>

        <div class="flex min-h-full items-center justify-center p-4">
            <el-dialog-panel class="relative transform overflow-hidden rounded-2xl bg-white dark:bg-[#18181b] text-left shadow-2xl border border-white/10 transition-all sm:w-full sm:max-w-lg">
                <div class="p-6">
                    <div class="sm:flex sm:items-start">
                        <div class="mx-auto flex size-10 shrink-0 items-center justify-center rounded-full bg-red-500/10 sm:mx-0">
                            <svg class="size-6 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                            </svg>
                        </div>
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                            <h3 class="text-lg font-semibold text-red-600">{{$title}}</h3>
                            <p class="mt-2 text-sm text-heading">
                                Are you sure you want to delete <strong>{{ $name }}</strong>?
                            </p>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-200 dark:bg-[#18181b] px-6 py-4 gap-3 sm:flex sm:flex-row-reverse">
                    <form action="{{ $route }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="inline-flex w-full justify-center rounded-lg bg-red-600 px-4 py-2 text-sm font-semibold text-white hover:bg-red-500 transition-colors sm:w-auto">
                            Confirm Delete
                        </button>
                    </form>

                    <button type="button" command="close" commandfor="delete-modal-{{ $id }}" class="mt-3 inline-flex w-full justify-center rounded-lg  px-4 py-2 text-sm font-semibold text-heading hover:bg-gray-300 dark:hover:bg-white/10 transition-colors sm:mt-0 sm:w-auto cursor-pointer">
                        Cancel
                    </button>
                </div>
            </el-dialog-panel>
        </div>
    </dialog>
</el-dialog>

