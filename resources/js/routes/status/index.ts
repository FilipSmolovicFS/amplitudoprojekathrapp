import { queryParams, type RouteQueryOptions, type RouteDefinition, type RouteFormDefinition, applyUrlDefaults } from './../../wayfinder'
/**
* @see \App\Http\Controllers\EmployeeStatusController::index
 * @see app/Http/Controllers/EmployeeStatusController.php:22
 * @route '/status'
 */
export const index = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: index.url(options),
    method: 'get',
})

index.definition = {
    methods: ["get","head"],
    url: '/status',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\EmployeeStatusController::index
 * @see app/Http/Controllers/EmployeeStatusController.php:22
 * @route '/status'
 */
index.url = (options?: RouteQueryOptions) => {
    return index.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\EmployeeStatusController::index
 * @see app/Http/Controllers/EmployeeStatusController.php:22
 * @route '/status'
 */
index.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: index.url(options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\EmployeeStatusController::index
 * @see app/Http/Controllers/EmployeeStatusController.php:22
 * @route '/status'
 */
index.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: index.url(options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\EmployeeStatusController::index
 * @see app/Http/Controllers/EmployeeStatusController.php:22
 * @route '/status'
 */
    const indexForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: index.url(options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\EmployeeStatusController::index
 * @see app/Http/Controllers/EmployeeStatusController.php:22
 * @route '/status'
 */
        indexForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: index.url(options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\EmployeeStatusController::index
 * @see app/Http/Controllers/EmployeeStatusController.php:22
 * @route '/status'
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
* @see \App\Http\Controllers\EmployeeStatusController::create
 * @see app/Http/Controllers/EmployeeStatusController.php:33
 * @route '/status/create'
 */
export const create = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: create.url(options),
    method: 'get',
})

create.definition = {
    methods: ["get","head"],
    url: '/status/create',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\EmployeeStatusController::create
 * @see app/Http/Controllers/EmployeeStatusController.php:33
 * @route '/status/create'
 */
create.url = (options?: RouteQueryOptions) => {
    return create.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\EmployeeStatusController::create
 * @see app/Http/Controllers/EmployeeStatusController.php:33
 * @route '/status/create'
 */
create.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: create.url(options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\EmployeeStatusController::create
 * @see app/Http/Controllers/EmployeeStatusController.php:33
 * @route '/status/create'
 */
create.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: create.url(options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\EmployeeStatusController::create
 * @see app/Http/Controllers/EmployeeStatusController.php:33
 * @route '/status/create'
 */
    const createForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: create.url(options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\EmployeeStatusController::create
 * @see app/Http/Controllers/EmployeeStatusController.php:33
 * @route '/status/create'
 */
        createForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: create.url(options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\EmployeeStatusController::create
 * @see app/Http/Controllers/EmployeeStatusController.php:33
 * @route '/status/create'
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
* @see \App\Http\Controllers\EmployeeStatusController::store
 * @see app/Http/Controllers/EmployeeStatusController.php:41
 * @route '/status'
 */
export const store = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: store.url(options),
    method: 'post',
})

store.definition = {
    methods: ["post"],
    url: '/status',
} satisfies RouteDefinition<["post"]>

/**
* @see \App\Http\Controllers\EmployeeStatusController::store
 * @see app/Http/Controllers/EmployeeStatusController.php:41
 * @route '/status'
 */
store.url = (options?: RouteQueryOptions) => {
    return store.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\EmployeeStatusController::store
 * @see app/Http/Controllers/EmployeeStatusController.php:41
 * @route '/status'
 */
store.post = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: store.url(options),
    method: 'post',
})

    /**
* @see \App\Http\Controllers\EmployeeStatusController::store
 * @see app/Http/Controllers/EmployeeStatusController.php:41
 * @route '/status'
 */
    const storeForm = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
        action: store.url(options),
        method: 'post',
    })

            /**
* @see \App\Http\Controllers\EmployeeStatusController::store
 * @see app/Http/Controllers/EmployeeStatusController.php:41
 * @route '/status'
 */
        storeForm.post = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
            action: store.url(options),
            method: 'post',
        })
    
    store.form = storeForm
/**
* @see \App\Http\Controllers\EmployeeStatusController::show
 * @see app/Http/Controllers/EmployeeStatusController.php:54
 * @route '/status/{status}'
 */
export const show = (args: { status: number | { id: number } } | [status: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: show.url(args, options),
    method: 'get',
})

show.definition = {
    methods: ["get","head"],
    url: '/status/{status}',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\EmployeeStatusController::show
 * @see app/Http/Controllers/EmployeeStatusController.php:54
 * @route '/status/{status}'
 */
show.url = (args: { status: number | { id: number } } | [status: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions) => {
    if (typeof args === 'string' || typeof args === 'number') {
        args = { status: args }
    }

            if (typeof args === 'object' && !Array.isArray(args) && 'id' in args) {
            args = { status: args.id }
        }
    
    if (Array.isArray(args)) {
        args = {
                    status: args[0],
                }
    }

    args = applyUrlDefaults(args)

    const parsedArgs = {
                        status: typeof args.status === 'object'
                ? args.status.id
                : args.status,
                }

    return show.definition.url
            .replace('{status}', parsedArgs.status.toString())
            .replace(/\/+$/, '') + queryParams(options)
}

/**
* @see \App\Http\Controllers\EmployeeStatusController::show
 * @see app/Http/Controllers/EmployeeStatusController.php:54
 * @route '/status/{status}'
 */
show.get = (args: { status: number | { id: number } } | [status: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: show.url(args, options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\EmployeeStatusController::show
 * @see app/Http/Controllers/EmployeeStatusController.php:54
 * @route '/status/{status}'
 */
show.head = (args: { status: number | { id: number } } | [status: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: show.url(args, options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\EmployeeStatusController::show
 * @see app/Http/Controllers/EmployeeStatusController.php:54
 * @route '/status/{status}'
 */
    const showForm = (args: { status: number | { id: number } } | [status: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: show.url(args, options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\EmployeeStatusController::show
 * @see app/Http/Controllers/EmployeeStatusController.php:54
 * @route '/status/{status}'
 */
        showForm.get = (args: { status: number | { id: number } } | [status: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: show.url(args, options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\EmployeeStatusController::show
 * @see app/Http/Controllers/EmployeeStatusController.php:54
 * @route '/status/{status}'
 */
        showForm.head = (args: { status: number | { id: number } } | [status: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
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
* @see \App\Http\Controllers\EmployeeStatusController::edit
 * @see app/Http/Controllers/EmployeeStatusController.php:62
 * @route '/status/{status}/edit'
 */
export const edit = (args: { status: number | { id: number } } | [status: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: edit.url(args, options),
    method: 'get',
})

edit.definition = {
    methods: ["get","head"],
    url: '/status/{status}/edit',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\EmployeeStatusController::edit
 * @see app/Http/Controllers/EmployeeStatusController.php:62
 * @route '/status/{status}/edit'
 */
edit.url = (args: { status: number | { id: number } } | [status: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions) => {
    if (typeof args === 'string' || typeof args === 'number') {
        args = { status: args }
    }

            if (typeof args === 'object' && !Array.isArray(args) && 'id' in args) {
            args = { status: args.id }
        }
    
    if (Array.isArray(args)) {
        args = {
                    status: args[0],
                }
    }

    args = applyUrlDefaults(args)

    const parsedArgs = {
                        status: typeof args.status === 'object'
                ? args.status.id
                : args.status,
                }

    return edit.definition.url
            .replace('{status}', parsedArgs.status.toString())
            .replace(/\/+$/, '') + queryParams(options)
}

/**
* @see \App\Http\Controllers\EmployeeStatusController::edit
 * @see app/Http/Controllers/EmployeeStatusController.php:62
 * @route '/status/{status}/edit'
 */
edit.get = (args: { status: number | { id: number } } | [status: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: edit.url(args, options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\EmployeeStatusController::edit
 * @see app/Http/Controllers/EmployeeStatusController.php:62
 * @route '/status/{status}/edit'
 */
edit.head = (args: { status: number | { id: number } } | [status: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: edit.url(args, options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\EmployeeStatusController::edit
 * @see app/Http/Controllers/EmployeeStatusController.php:62
 * @route '/status/{status}/edit'
 */
    const editForm = (args: { status: number | { id: number } } | [status: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: edit.url(args, options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\EmployeeStatusController::edit
 * @see app/Http/Controllers/EmployeeStatusController.php:62
 * @route '/status/{status}/edit'
 */
        editForm.get = (args: { status: number | { id: number } } | [status: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: edit.url(args, options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\EmployeeStatusController::edit
 * @see app/Http/Controllers/EmployeeStatusController.php:62
 * @route '/status/{status}/edit'
 */
        editForm.head = (args: { status: number | { id: number } } | [status: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
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
* @see \App\Http\Controllers\EmployeeStatusController::update
 * @see app/Http/Controllers/EmployeeStatusController.php:70
 * @route '/status/{status}'
 */
export const update = (args: { status: number | { id: number } } | [status: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteDefinition<'put'> => ({
    url: update.url(args, options),
    method: 'put',
})

update.definition = {
    methods: ["put","patch"],
    url: '/status/{status}',
} satisfies RouteDefinition<["put","patch"]>

/**
* @see \App\Http\Controllers\EmployeeStatusController::update
 * @see app/Http/Controllers/EmployeeStatusController.php:70
 * @route '/status/{status}'
 */
update.url = (args: { status: number | { id: number } } | [status: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions) => {
    if (typeof args === 'string' || typeof args === 'number') {
        args = { status: args }
    }

            if (typeof args === 'object' && !Array.isArray(args) && 'id' in args) {
            args = { status: args.id }
        }
    
    if (Array.isArray(args)) {
        args = {
                    status: args[0],
                }
    }

    args = applyUrlDefaults(args)

    const parsedArgs = {
                        status: typeof args.status === 'object'
                ? args.status.id
                : args.status,
                }

    return update.definition.url
            .replace('{status}', parsedArgs.status.toString())
            .replace(/\/+$/, '') + queryParams(options)
}

/**
* @see \App\Http\Controllers\EmployeeStatusController::update
 * @see app/Http/Controllers/EmployeeStatusController.php:70
 * @route '/status/{status}'
 */
update.put = (args: { status: number | { id: number } } | [status: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteDefinition<'put'> => ({
    url: update.url(args, options),
    method: 'put',
})
/**
* @see \App\Http\Controllers\EmployeeStatusController::update
 * @see app/Http/Controllers/EmployeeStatusController.php:70
 * @route '/status/{status}'
 */
update.patch = (args: { status: number | { id: number } } | [status: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteDefinition<'patch'> => ({
    url: update.url(args, options),
    method: 'patch',
})

    /**
* @see \App\Http\Controllers\EmployeeStatusController::update
 * @see app/Http/Controllers/EmployeeStatusController.php:70
 * @route '/status/{status}'
 */
    const updateForm = (args: { status: number | { id: number } } | [status: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
        action: update.url(args, {
                    [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                        _method: 'PUT',
                        ...(options?.query ?? options?.mergeQuery ?? {}),
                    }
                }),
        method: 'post',
    })

            /**
* @see \App\Http\Controllers\EmployeeStatusController::update
 * @see app/Http/Controllers/EmployeeStatusController.php:70
 * @route '/status/{status}'
 */
        updateForm.put = (args: { status: number | { id: number } } | [status: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
            action: update.url(args, {
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'PUT',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'post',
        })
            /**
* @see \App\Http\Controllers\EmployeeStatusController::update
 * @see app/Http/Controllers/EmployeeStatusController.php:70
 * @route '/status/{status}'
 */
        updateForm.patch = (args: { status: number | { id: number } } | [status: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
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
* @see \App\Http\Controllers\EmployeeStatusController::destroy
 * @see app/Http/Controllers/EmployeeStatusController.php:78
 * @route '/status/{status}'
 */
export const destroy = (args: { status: number | { id: number } } | [status: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteDefinition<'delete'> => ({
    url: destroy.url(args, options),
    method: 'delete',
})

destroy.definition = {
    methods: ["delete"],
    url: '/status/{status}',
} satisfies RouteDefinition<["delete"]>

/**
* @see \App\Http\Controllers\EmployeeStatusController::destroy
 * @see app/Http/Controllers/EmployeeStatusController.php:78
 * @route '/status/{status}'
 */
destroy.url = (args: { status: number | { id: number } } | [status: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions) => {
    if (typeof args === 'string' || typeof args === 'number') {
        args = { status: args }
    }

            if (typeof args === 'object' && !Array.isArray(args) && 'id' in args) {
            args = { status: args.id }
        }
    
    if (Array.isArray(args)) {
        args = {
                    status: args[0],
                }
    }

    args = applyUrlDefaults(args)

    const parsedArgs = {
                        status: typeof args.status === 'object'
                ? args.status.id
                : args.status,
                }

    return destroy.definition.url
            .replace('{status}', parsedArgs.status.toString())
            .replace(/\/+$/, '') + queryParams(options)
}

/**
* @see \App\Http\Controllers\EmployeeStatusController::destroy
 * @see app/Http/Controllers/EmployeeStatusController.php:78
 * @route '/status/{status}'
 */
destroy.delete = (args: { status: number | { id: number } } | [status: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteDefinition<'delete'> => ({
    url: destroy.url(args, options),
    method: 'delete',
})

    /**
* @see \App\Http\Controllers\EmployeeStatusController::destroy
 * @see app/Http/Controllers/EmployeeStatusController.php:78
 * @route '/status/{status}'
 */
    const destroyForm = (args: { status: number | { id: number } } | [status: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
        action: destroy.url(args, {
                    [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                        _method: 'DELETE',
                        ...(options?.query ?? options?.mergeQuery ?? {}),
                    }
                }),
        method: 'post',
    })

            /**
* @see \App\Http\Controllers\EmployeeStatusController::destroy
 * @see app/Http/Controllers/EmployeeStatusController.php:78
 * @route '/status/{status}'
 */
        destroyForm.delete = (args: { status: number | { id: number } } | [status: number | { id: number } ] | number | { id: number }, options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
            action: destroy.url(args, {
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'DELETE',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'post',
        })
    
    destroy.form = destroyForm
const status = {
    index: Object.assign(index, index),
create: Object.assign(create, create),
store: Object.assign(store, store),
show: Object.assign(show, show),
edit: Object.assign(edit, edit),
update: Object.assign(update, update),
destroy: Object.assign(destroy, destroy),
}

export default status