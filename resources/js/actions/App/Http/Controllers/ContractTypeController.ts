import { queryParams, type RouteQueryOptions, type RouteDefinition, type RouteFormDefinition, applyUrlDefaults } from './../../../../wayfinder'
/**
* @see \App\Http\Controllers\ContractTypeController::index
 * @see app/Http/Controllers/ContractTypeController.php:25
 * @route '/contract-type'
 */
export const index = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: index.url(options),
    method: 'get',
})

index.definition = {
    methods: ["get","head"],
    url: '/contract-type',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\ContractTypeController::index
 * @see app/Http/Controllers/ContractTypeController.php:25
 * @route '/contract-type'
 */
index.url = (options?: RouteQueryOptions) => {
    return index.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\ContractTypeController::index
 * @see app/Http/Controllers/ContractTypeController.php:25
 * @route '/contract-type'
 */
index.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: index.url(options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\ContractTypeController::index
 * @see app/Http/Controllers/ContractTypeController.php:25
 * @route '/contract-type'
 */
index.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: index.url(options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\ContractTypeController::index
 * @see app/Http/Controllers/ContractTypeController.php:25
 * @route '/contract-type'
 */
    const indexForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: index.url(options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\ContractTypeController::index
 * @see app/Http/Controllers/ContractTypeController.php:25
 * @route '/contract-type'
 */
        indexForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: index.url(options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\ContractTypeController::index
 * @see app/Http/Controllers/ContractTypeController.php:25
 * @route '/contract-type'
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
* @see \App\Http\Controllers\ContractTypeController::create
 * @see app/Http/Controllers/ContractTypeController.php:37
 * @route '/contract-type/create'
 */
export const create = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: create.url(options),
    method: 'get',
})

create.definition = {
    methods: ["get","head"],
    url: '/contract-type/create',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\ContractTypeController::create
 * @see app/Http/Controllers/ContractTypeController.php:37
 * @route '/contract-type/create'
 */
create.url = (options?: RouteQueryOptions) => {
    return create.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\ContractTypeController::create
 * @see app/Http/Controllers/ContractTypeController.php:37
 * @route '/contract-type/create'
 */
create.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: create.url(options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\ContractTypeController::create
 * @see app/Http/Controllers/ContractTypeController.php:37
 * @route '/contract-type/create'
 */
create.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: create.url(options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\ContractTypeController::create
 * @see app/Http/Controllers/ContractTypeController.php:37
 * @route '/contract-type/create'
 */
    const createForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: create.url(options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\ContractTypeController::create
 * @see app/Http/Controllers/ContractTypeController.php:37
 * @route '/contract-type/create'
 */
        createForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: create.url(options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\ContractTypeController::create
 * @see app/Http/Controllers/ContractTypeController.php:37
 * @route '/contract-type/create'
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
* @see \App\Http\Controllers\ContractTypeController::store
 * @see app/Http/Controllers/ContractTypeController.php:45
 * @route '/contract-type'
 */
export const store = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: store.url(options),
    method: 'post',
})

store.definition = {
    methods: ["post"],
    url: '/contract-type',
} satisfies RouteDefinition<["post"]>

/**
* @see \App\Http\Controllers\ContractTypeController::store
 * @see app/Http/Controllers/ContractTypeController.php:45
 * @route '/contract-type'
 */
store.url = (options?: RouteQueryOptions) => {
    return store.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\ContractTypeController::store
 * @see app/Http/Controllers/ContractTypeController.php:45
 * @route '/contract-type'
 */
store.post = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: store.url(options),
    method: 'post',
})

    /**
* @see \App\Http\Controllers\ContractTypeController::store
 * @see app/Http/Controllers/ContractTypeController.php:45
 * @route '/contract-type'
 */
    const storeForm = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
        action: store.url(options),
        method: 'post',
    })

            /**
* @see \App\Http\Controllers\ContractTypeController::store
 * @see app/Http/Controllers/ContractTypeController.php:45
 * @route '/contract-type'
 */
        storeForm.post = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
            action: store.url(options),
            method: 'post',
        })
    
    store.form = storeForm
/**
* @see \App\Http\Controllers\ContractTypeController::show
 * @see app/Http/Controllers/ContractTypeController.php:58
 * @route '/contract-type/{contract_type}'
 */
export const show = (args: { contract_type: number | { id: number } } | [contract_type: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: show.url(args, options),
    method: 'get',
})

show.definition = {
    methods: ["get","head"],
    url: '/contract-type/{contract_type}',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\ContractTypeController::show
 * @see app/Http/Controllers/ContractTypeController.php:58
 * @route '/contract-type/{contract_type}'
 */
show.url = (args: { contract_type: number | { id: number } } | [contract_type: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions) => {
    if (typeof args === 'string' || typeof args === 'number') {
        args = { contract_type: args }
    }

            if (typeof args === 'object' && !Array.isArray(args) && 'id' in args) {
            args = { contract_type: args.id }
        }
    
    if (Array.isArray(args)) {
        args = {
                    contract_type: args[0],
                }
    }

    args = applyUrlDefaults(args)

    const parsedArgs = {
                        contract_type: typeof args.contract_type === 'object'
                ? args.contract_type.id
                : args.contract_type,
                }

    return show.definition.url
            .replace('{contract_type}', parsedArgs.contract_type.toString())
            .replace(/\/+$/, '') + queryParams(options)
}

/**
* @see \App\Http\Controllers\ContractTypeController::show
 * @see app/Http/Controllers/ContractTypeController.php:58
 * @route '/contract-type/{contract_type}'
 */
show.get = (args: { contract_type: number | { id: number } } | [contract_type: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: show.url(args, options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\ContractTypeController::show
 * @see app/Http/Controllers/ContractTypeController.php:58
 * @route '/contract-type/{contract_type}'
 */
show.head = (args: { contract_type: number | { id: number } } | [contract_type: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: show.url(args, options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\ContractTypeController::show
 * @see app/Http/Controllers/ContractTypeController.php:58
 * @route '/contract-type/{contract_type}'
 */
    const showForm = (args: { contract_type: number | { id: number } } | [contract_type: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: show.url(args, options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\ContractTypeController::show
 * @see app/Http/Controllers/ContractTypeController.php:58
 * @route '/contract-type/{contract_type}'
 */
        showForm.get = (args: { contract_type: number | { id: number } } | [contract_type: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: show.url(args, options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\ContractTypeController::show
 * @see app/Http/Controllers/ContractTypeController.php:58
 * @route '/contract-type/{contract_type}'
 */
        showForm.head = (args: { contract_type: number | { id: number } } | [contract_type: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
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
* @see \App\Http\Controllers\ContractTypeController::edit
 * @see app/Http/Controllers/ContractTypeController.php:66
 * @route '/contract-type/{contract_type}/edit'
 */
export const edit = (args: { contract_type: number | { id: number } } | [contract_type: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: edit.url(args, options),
    method: 'get',
})

edit.definition = {
    methods: ["get","head"],
    url: '/contract-type/{contract_type}/edit',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\ContractTypeController::edit
 * @see app/Http/Controllers/ContractTypeController.php:66
 * @route '/contract-type/{contract_type}/edit'
 */
edit.url = (args: { contract_type: number | { id: number } } | [contract_type: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions) => {
    if (typeof args === 'string' || typeof args === 'number') {
        args = { contract_type: args }
    }

            if (typeof args === 'object' && !Array.isArray(args) && 'id' in args) {
            args = { contract_type: args.id }
        }
    
    if (Array.isArray(args)) {
        args = {
                    contract_type: args[0],
                }
    }

    args = applyUrlDefaults(args)

    const parsedArgs = {
                        contract_type: typeof args.contract_type === 'object'
                ? args.contract_type.id
                : args.contract_type,
                }

    return edit.definition.url
            .replace('{contract_type}', parsedArgs.contract_type.toString())
            .replace(/\/+$/, '') + queryParams(options)
}

/**
* @see \App\Http\Controllers\ContractTypeController::edit
 * @see app/Http/Controllers/ContractTypeController.php:66
 * @route '/contract-type/{contract_type}/edit'
 */
edit.get = (args: { contract_type: number | { id: number } } | [contract_type: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: edit.url(args, options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\ContractTypeController::edit
 * @see app/Http/Controllers/ContractTypeController.php:66
 * @route '/contract-type/{contract_type}/edit'
 */
edit.head = (args: { contract_type: number | { id: number } } | [contract_type: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: edit.url(args, options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\ContractTypeController::edit
 * @see app/Http/Controllers/ContractTypeController.php:66
 * @route '/contract-type/{contract_type}/edit'
 */
    const editForm = (args: { contract_type: number | { id: number } } | [contract_type: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: edit.url(args, options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\ContractTypeController::edit
 * @see app/Http/Controllers/ContractTypeController.php:66
 * @route '/contract-type/{contract_type}/edit'
 */
        editForm.get = (args: { contract_type: number | { id: number } } | [contract_type: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: edit.url(args, options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\ContractTypeController::edit
 * @see app/Http/Controllers/ContractTypeController.php:66
 * @route '/contract-type/{contract_type}/edit'
 */
        editForm.head = (args: { contract_type: number | { id: number } } | [contract_type: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
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
* @see \App\Http\Controllers\ContractTypeController::update
 * @see app/Http/Controllers/ContractTypeController.php:74
 * @route '/contract-type/{contract_type}'
 */
export const update = (args: { contract_type: number | { id: number } } | [contract_type: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteDefinition<'put'> => ({
    url: update.url(args, options),
    method: 'put',
})

update.definition = {
    methods: ["put","patch"],
    url: '/contract-type/{contract_type}',
} satisfies RouteDefinition<["put","patch"]>

/**
* @see \App\Http\Controllers\ContractTypeController::update
 * @see app/Http/Controllers/ContractTypeController.php:74
 * @route '/contract-type/{contract_type}'
 */
update.url = (args: { contract_type: number | { id: number } } | [contract_type: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions) => {
    if (typeof args === 'string' || typeof args === 'number') {
        args = { contract_type: args }
    }

            if (typeof args === 'object' && !Array.isArray(args) && 'id' in args) {
            args = { contract_type: args.id }
        }
    
    if (Array.isArray(args)) {
        args = {
                    contract_type: args[0],
                }
    }

    args = applyUrlDefaults(args)

    const parsedArgs = {
                        contract_type: typeof args.contract_type === 'object'
                ? args.contract_type.id
                : args.contract_type,
                }

    return update.definition.url
            .replace('{contract_type}', parsedArgs.contract_type.toString())
            .replace(/\/+$/, '') + queryParams(options)
}

/**
* @see \App\Http\Controllers\ContractTypeController::update
 * @see app/Http/Controllers/ContractTypeController.php:74
 * @route '/contract-type/{contract_type}'
 */
update.put = (args: { contract_type: number | { id: number } } | [contract_type: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteDefinition<'put'> => ({
    url: update.url(args, options),
    method: 'put',
})
/**
* @see \App\Http\Controllers\ContractTypeController::update
 * @see app/Http/Controllers/ContractTypeController.php:74
 * @route '/contract-type/{contract_type}'
 */
update.patch = (args: { contract_type: number | { id: number } } | [contract_type: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteDefinition<'patch'> => ({
    url: update.url(args, options),
    method: 'patch',
})

    /**
* @see \App\Http\Controllers\ContractTypeController::update
 * @see app/Http/Controllers/ContractTypeController.php:74
 * @route '/contract-type/{contract_type}'
 */
    const updateForm = (args: { contract_type: number | { id: number } } | [contract_type: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
        action: update.url(args, {
                    [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                        _method: 'PUT',
                        ...(options?.query ?? options?.mergeQuery ?? {}),
                    }
                }),
        method: 'post',
    })

            /**
* @see \App\Http\Controllers\ContractTypeController::update
 * @see app/Http/Controllers/ContractTypeController.php:74
 * @route '/contract-type/{contract_type}'
 */
        updateForm.put = (args: { contract_type: number | { id: number } } | [contract_type: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
            action: update.url(args, {
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'PUT',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'post',
        })
            /**
* @see \App\Http\Controllers\ContractTypeController::update
 * @see app/Http/Controllers/ContractTypeController.php:74
 * @route '/contract-type/{contract_type}'
 */
        updateForm.patch = (args: { contract_type: number | { id: number } } | [contract_type: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
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
* @see \App\Http\Controllers\ContractTypeController::destroy
 * @see app/Http/Controllers/ContractTypeController.php:82
 * @route '/contract-type/{contract_type}'
 */
export const destroy = (args: { contract_type: number | { id: number } } | [contract_type: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteDefinition<'delete'> => ({
    url: destroy.url(args, options),
    method: 'delete',
})

destroy.definition = {
    methods: ["delete"],
    url: '/contract-type/{contract_type}',
} satisfies RouteDefinition<["delete"]>

/**
* @see \App\Http\Controllers\ContractTypeController::destroy
 * @see app/Http/Controllers/ContractTypeController.php:82
 * @route '/contract-type/{contract_type}'
 */
destroy.url = (args: { contract_type: number | { id: number } } | [contract_type: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions) => {
    if (typeof args === 'string' || typeof args === 'number') {
        args = { contract_type: args }
    }

            if (typeof args === 'object' && !Array.isArray(args) && 'id' in args) {
            args = { contract_type: args.id }
        }
    
    if (Array.isArray(args)) {
        args = {
                    contract_type: args[0],
                }
    }

    args = applyUrlDefaults(args)

    const parsedArgs = {
                        contract_type: typeof args.contract_type === 'object'
                ? args.contract_type.id
                : args.contract_type,
                }

    return destroy.definition.url
            .replace('{contract_type}', parsedArgs.contract_type.toString())
            .replace(/\/+$/, '') + queryParams(options)
}

/**
* @see \App\Http\Controllers\ContractTypeController::destroy
 * @see app/Http/Controllers/ContractTypeController.php:82
 * @route '/contract-type/{contract_type}'
 */
destroy.delete = (args: { contract_type: number | { id: number } } | [contract_type: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteDefinition<'delete'> => ({
    url: destroy.url(args, options),
    method: 'delete',
})

    /**
* @see \App\Http\Controllers\ContractTypeController::destroy
 * @see app/Http/Controllers/ContractTypeController.php:82
 * @route '/contract-type/{contract_type}'
 */
    const destroyForm = (args: { contract_type: number | { id: number } } | [contract_type: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
        action: destroy.url(args, {
                    [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                        _method: 'DELETE',
                        ...(options?.query ?? options?.mergeQuery ?? {}),
                    }
                }),
        method: 'post',
    })

            /**
* @see \App\Http\Controllers\ContractTypeController::destroy
 * @see app/Http/Controllers/ContractTypeController.php:82
 * @route '/contract-type/{contract_type}'
 */
        destroyForm.delete = (args: { contract_type: number | { id: number } } | [contract_type: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
            action: destroy.url(args, {
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'DELETE',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'post',
        })
    
    destroy.form = destroyForm
const ContractTypeController = { index, create, store, show, edit, update, destroy }

export default ContractTypeController