import { queryParams, type RouteQueryOptions, type RouteDefinition, type RouteFormDefinition, applyUrlDefaults } from './../../wayfinder'
/**
* @see \App\Http\Controllers\ContractController::index
 * @see app/Http/Controllers/ContractController.php:23
 * @route '/contract'
 */
export const index = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: index.url(options),
    method: 'get',
})

index.definition = {
    methods: ["get","head"],
    url: '/contract',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\ContractController::index
 * @see app/Http/Controllers/ContractController.php:23
 * @route '/contract'
 */
index.url = (options?: RouteQueryOptions) => {
    return index.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\ContractController::index
 * @see app/Http/Controllers/ContractController.php:23
 * @route '/contract'
 */
index.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: index.url(options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\ContractController::index
 * @see app/Http/Controllers/ContractController.php:23
 * @route '/contract'
 */
index.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: index.url(options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\ContractController::index
 * @see app/Http/Controllers/ContractController.php:23
 * @route '/contract'
 */
    const indexForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: index.url(options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\ContractController::index
 * @see app/Http/Controllers/ContractController.php:23
 * @route '/contract'
 */
        indexForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: index.url(options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\ContractController::index
 * @see app/Http/Controllers/ContractController.php:23
 * @route '/contract'
 */
        indexForm.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: index.url({
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'HEAD',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'get',
        })
    
    index.form = indexForm
/**
* @see \App\Http\Controllers\ContractController::create
 * @see app/Http/Controllers/ContractController.php:31
 * @route '/contract/create'
 */
export const create = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: create.url(options),
    method: 'get',
})

create.definition = {
    methods: ["get","head"],
    url: '/contract/create',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\ContractController::create
 * @see app/Http/Controllers/ContractController.php:31
 * @route '/contract/create'
 */
create.url = (options?: RouteQueryOptions) => {
    return create.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\ContractController::create
 * @see app/Http/Controllers/ContractController.php:31
 * @route '/contract/create'
 */
create.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: create.url(options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\ContractController::create
 * @see app/Http/Controllers/ContractController.php:31
 * @route '/contract/create'
 */
create.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: create.url(options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\ContractController::create
 * @see app/Http/Controllers/ContractController.php:31
 * @route '/contract/create'
 */
    const createForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: create.url(options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\ContractController::create
 * @see app/Http/Controllers/ContractController.php:31
 * @route '/contract/create'
 */
        createForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: create.url(options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\ContractController::create
 * @see app/Http/Controllers/ContractController.php:31
 * @route '/contract/create'
 */
        createForm.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: create.url({
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'HEAD',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'get',
        })
    
    create.form = createForm
/**
* @see \App\Http\Controllers\ContractController::store
 * @see app/Http/Controllers/ContractController.php:39
 * @route '/contract'
 */
export const store = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: store.url(options),
    method: 'post',
})

store.definition = {
    methods: ["post"],
    url: '/contract',
} satisfies RouteDefinition<["post"]>

/**
* @see \App\Http\Controllers\ContractController::store
 * @see app/Http/Controllers/ContractController.php:39
 * @route '/contract'
 */
store.url = (options?: RouteQueryOptions) => {
    return store.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\ContractController::store
 * @see app/Http/Controllers/ContractController.php:39
 * @route '/contract'
 */
store.post = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: store.url(options),
    method: 'post',
})

    /**
* @see \App\Http\Controllers\ContractController::store
 * @see app/Http/Controllers/ContractController.php:39
 * @route '/contract'
 */
    const storeForm = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
        action: store.url(options),
        method: 'post',
    })

            /**
* @see \App\Http\Controllers\ContractController::store
 * @see app/Http/Controllers/ContractController.php:39
 * @route '/contract'
 */
        storeForm.post = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
            action: store.url(options),
            method: 'post',
        })
    
    store.form = storeForm
/**
* @see \App\Http\Controllers\ContractController::show
 * @see app/Http/Controllers/ContractController.php:49
 * @route '/contract/{contract}'
 */
export const show = (args: { contract: number | { id: number } } | [contract: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: show.url(args, options),
    method: 'get',
})

show.definition = {
    methods: ["get","head"],
    url: '/contract/{contract}',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\ContractController::show
 * @see app/Http/Controllers/ContractController.php:49
 * @route '/contract/{contract}'
 */
show.url = (args: { contract: number | { id: number } } | [contract: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions) => {
    if (typeof args === 'string' || typeof args === 'number') {
        args = { contract: args }
    }

            if (typeof args === 'object' && !Array.isArray(args) && 'id' in args) {
            args = { contract: args.id }
        }
    
    if (Array.isArray(args)) {
        args = {
                    contract: args[0],
                }
    }

    args = applyUrlDefaults(args)

    const parsedArgs = {
                        contract: typeof args.contract === 'object'
                ? args.contract.id
                : args.contract,
                }

    return show.definition.url
            .replace('{contract}', parsedArgs.contract.toString())
            .replace(/\/+$/, '') + queryParams(options)
}

/**
* @see \App\Http\Controllers\ContractController::show
 * @see app/Http/Controllers/ContractController.php:49
 * @route '/contract/{contract}'
 */
show.get = (args: { contract: number | { id: number } } | [contract: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: show.url(args, options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\ContractController::show
 * @see app/Http/Controllers/ContractController.php:49
 * @route '/contract/{contract}'
 */
show.head = (args: { contract: number | { id: number } } | [contract: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: show.url(args, options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\ContractController::show
 * @see app/Http/Controllers/ContractController.php:49
 * @route '/contract/{contract}'
 */
    const showForm = (args: { contract: number | { id: number } } | [contract: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: show.url(args, options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\ContractController::show
 * @see app/Http/Controllers/ContractController.php:49
 * @route '/contract/{contract}'
 */
        showForm.get = (args: { contract: number | { id: number } } | [contract: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: show.url(args, options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\ContractController::show
 * @see app/Http/Controllers/ContractController.php:49
 * @route '/contract/{contract}'
 */
        showForm.head = (args: { contract: number | { id: number } } | [contract: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: show.url(args, {
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'HEAD',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'get',
        })
    
    show.form = showForm
/**
* @see \App\Http\Controllers\ContractController::edit
 * @see app/Http/Controllers/ContractController.php:57
 * @route '/contract/{contract}/edit'
 */
export const edit = (args: { contract: number | { id: number } } | [contract: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: edit.url(args, options),
    method: 'get',
})

edit.definition = {
    methods: ["get","head"],
    url: '/contract/{contract}/edit',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\ContractController::edit
 * @see app/Http/Controllers/ContractController.php:57
 * @route '/contract/{contract}/edit'
 */
edit.url = (args: { contract: number | { id: number } } | [contract: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions) => {
    if (typeof args === 'string' || typeof args === 'number') {
        args = { contract: args }
    }

            if (typeof args === 'object' && !Array.isArray(args) && 'id' in args) {
            args = { contract: args.id }
        }
    
    if (Array.isArray(args)) {
        args = {
                    contract: args[0],
                }
    }

    args = applyUrlDefaults(args)

    const parsedArgs = {
                        contract: typeof args.contract === 'object'
                ? args.contract.id
                : args.contract,
                }

    return edit.definition.url
            .replace('{contract}', parsedArgs.contract.toString())
            .replace(/\/+$/, '') + queryParams(options)
}

/**
* @see \App\Http\Controllers\ContractController::edit
 * @see app/Http/Controllers/ContractController.php:57
 * @route '/contract/{contract}/edit'
 */
edit.get = (args: { contract: number | { id: number } } | [contract: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: edit.url(args, options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\ContractController::edit
 * @see app/Http/Controllers/ContractController.php:57
 * @route '/contract/{contract}/edit'
 */
edit.head = (args: { contract: number | { id: number } } | [contract: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: edit.url(args, options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\ContractController::edit
 * @see app/Http/Controllers/ContractController.php:57
 * @route '/contract/{contract}/edit'
 */
    const editForm = (args: { contract: number | { id: number } } | [contract: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: edit.url(args, options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\ContractController::edit
 * @see app/Http/Controllers/ContractController.php:57
 * @route '/contract/{contract}/edit'
 */
        editForm.get = (args: { contract: number | { id: number } } | [contract: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: edit.url(args, options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\ContractController::edit
 * @see app/Http/Controllers/ContractController.php:57
 * @route '/contract/{contract}/edit'
 */
        editForm.head = (args: { contract: number | { id: number } } | [contract: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: edit.url(args, {
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'HEAD',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'get',
        })
    
    edit.form = editForm
/**
* @see \App\Http\Controllers\ContractController::update
 * @see app/Http/Controllers/ContractController.php:65
 * @route '/contract/{contract}'
 */
export const update = (args: { contract: number | { id: number } } | [contract: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteDefinition<'put'> => ({
    url: update.url(args, options),
    method: 'put',
})

update.definition = {
    methods: ["put","patch"],
    url: '/contract/{contract}',
} satisfies RouteDefinition<["put","patch"]>

/**
* @see \App\Http\Controllers\ContractController::update
 * @see app/Http/Controllers/ContractController.php:65
 * @route '/contract/{contract}'
 */
update.url = (args: { contract: number | { id: number } } | [contract: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions) => {
    if (typeof args === 'string' || typeof args === 'number') {
        args = { contract: args }
    }

            if (typeof args === 'object' && !Array.isArray(args) && 'id' in args) {
            args = { contract: args.id }
        }
    
    if (Array.isArray(args)) {
        args = {
                    contract: args[0],
                }
    }

    args = applyUrlDefaults(args)

    const parsedArgs = {
                        contract: typeof args.contract === 'object'
                ? args.contract.id
                : args.contract,
                }

    return update.definition.url
            .replace('{contract}', parsedArgs.contract.toString())
            .replace(/\/+$/, '') + queryParams(options)
}

/**
* @see \App\Http\Controllers\ContractController::update
 * @see app/Http/Controllers/ContractController.php:65
 * @route '/contract/{contract}'
 */
update.put = (args: { contract: number | { id: number } } | [contract: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteDefinition<'put'> => ({
    url: update.url(args, options),
    method: 'put',
})
/**
* @see \App\Http\Controllers\ContractController::update
 * @see app/Http/Controllers/ContractController.php:65
 * @route '/contract/{contract}'
 */
update.patch = (args: { contract: number | { id: number } } | [contract: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteDefinition<'patch'> => ({
    url: update.url(args, options),
    method: 'patch',
})

    /**
* @see \App\Http\Controllers\ContractController::update
 * @see app/Http/Controllers/ContractController.php:65
 * @route '/contract/{contract}'
 */
    const updateForm = (args: { contract: number | { id: number } } | [contract: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
        action: update.url(args, {
                    [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                        _method: 'PUT',
                        ...(options?.query ?? options?.mergeQuery ?? {}),
                    }
                }),
        method: 'post',
    })

            /**
* @see \App\Http\Controllers\ContractController::update
 * @see app/Http/Controllers/ContractController.php:65
 * @route '/contract/{contract}'
 */
        updateForm.put = (args: { contract: number | { id: number } } | [contract: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
            action: update.url(args, {
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'PUT',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'post',
        })
            /**
* @see \App\Http\Controllers\ContractController::update
 * @see app/Http/Controllers/ContractController.php:65
 * @route '/contract/{contract}'
 */
        updateForm.patch = (args: { contract: number | { id: number } } | [contract: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
            action: update.url(args, {
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'PATCH',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'post',
        })
    
    update.form = updateForm
/**
* @see \App\Http\Controllers\ContractController::destroy
 * @see app/Http/Controllers/ContractController.php:75
 * @route '/contract/{contract}'
 */
export const destroy = (args: { contract: number | { id: number } } | [contract: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteDefinition<'delete'> => ({
    url: destroy.url(args, options),
    method: 'delete',
})

destroy.definition = {
    methods: ["delete"],
    url: '/contract/{contract}',
} satisfies RouteDefinition<["delete"]>

/**
* @see \App\Http\Controllers\ContractController::destroy
 * @see app/Http/Controllers/ContractController.php:75
 * @route '/contract/{contract}'
 */
destroy.url = (args: { contract: number | { id: number } } | [contract: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions) => {
    if (typeof args === 'string' || typeof args === 'number') {
        args = { contract: args }
    }

            if (typeof args === 'object' && !Array.isArray(args) && 'id' in args) {
            args = { contract: args.id }
        }
    
    if (Array.isArray(args)) {
        args = {
                    contract: args[0],
                }
    }

    args = applyUrlDefaults(args)

    const parsedArgs = {
                        contract: typeof args.contract === 'object'
                ? args.contract.id
                : args.contract,
                }

    return destroy.definition.url
            .replace('{contract}', parsedArgs.contract.toString())
            .replace(/\/+$/, '') + queryParams(options)
}

/**
* @see \App\Http\Controllers\ContractController::destroy
 * @see app/Http/Controllers/ContractController.php:75
 * @route '/contract/{contract}'
 */
destroy.delete = (args: { contract: number | { id: number } } | [contract: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteDefinition<'delete'> => ({
    url: destroy.url(args, options),
    method: 'delete',
})

    /**
* @see \App\Http\Controllers\ContractController::destroy
 * @see app/Http/Controllers/ContractController.php:75
 * @route '/contract/{contract}'
 */
    const destroyForm = (args: { contract: number | { id: number } } | [contract: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
        action: destroy.url(args, {
                    [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                        _method: 'DELETE',
                        ...(options?.query ?? options?.mergeQuery ?? {}),
                    }
                }),
        method: 'post',
    })

            /**
* @see \App\Http\Controllers\ContractController::destroy
 * @see app/Http/Controllers/ContractController.php:75
 * @route '/contract/{contract}'
 */
        destroyForm.delete = (args: { contract: number | { id: number } } | [contract: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
            action: destroy.url(args, {
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'DELETE',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'post',
        })
    
    destroy.form = destroyForm
/**
* @see \App\Http\Controllers\ContractController::download
 * @see app/Http/Controllers/ContractController.php:82
 * @route '/contract-type/{document}/download'
 */
export const download = (args: { document: string | number } | [document: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: download.url(args, options),
    method: 'get',
})

download.definition = {
    methods: ["get","head"],
    url: '/contract-type/{document}/download',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\ContractController::download
 * @see app/Http/Controllers/ContractController.php:82
 * @route '/contract-type/{document}/download'
 */
download.url = (args: { document: string | number } | [document: string | number ] | string | number, options?: RouteQueryOptions) => {
    if (typeof args === 'string' || typeof args === 'number') {
        args = { document: args }
    }

    
    if (Array.isArray(args)) {
        args = {
                    document: args[0],
                }
    }

    args = applyUrlDefaults(args)

    const parsedArgs = {
                        document: args.document,
                }

    return download.definition.url
            .replace('{document}', parsedArgs.document.toString())
            .replace(/\/+$/, '') + queryParams(options)
}

/**
* @see \App\Http\Controllers\ContractController::download
 * @see app/Http/Controllers/ContractController.php:82
 * @route '/contract-type/{document}/download'
 */
download.get = (args: { document: string | number } | [document: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: download.url(args, options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\ContractController::download
 * @see app/Http/Controllers/ContractController.php:82
 * @route '/contract-type/{document}/download'
 */
download.head = (args: { document: string | number } | [document: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: download.url(args, options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\ContractController::download
 * @see app/Http/Controllers/ContractController.php:82
 * @route '/contract-type/{document}/download'
 */
    const downloadForm = (args: { document: string | number } | [document: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: download.url(args, options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\ContractController::download
 * @see app/Http/Controllers/ContractController.php:82
 * @route '/contract-type/{document}/download'
 */
        downloadForm.get = (args: { document: string | number } | [document: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: download.url(args, options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\ContractController::download
 * @see app/Http/Controllers/ContractController.php:82
 * @route '/contract-type/{document}/download'
 */
        downloadForm.head = (args: { document: string | number } | [document: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: download.url(args, {
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'HEAD',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'get',
        })
    
    download.form = downloadForm
const contract = {
    index: Object.assign(index, index),
create: Object.assign(create, create),
store: Object.assign(store, store),
show: Object.assign(show, show),
edit: Object.assign(edit, edit),
update: Object.assign(update, update),
destroy: Object.assign(destroy, destroy),
download: Object.assign(download, download),
}

export default contract