export interface Paginator<T>{
    data: T[];
    per_page: number;
    currentPage: number;
    path: string;
    query: any[];
    fragment?: any;
    pageName: string;
    escapeWhenCastingToString: boolean;
    onEachSide: number;
    options: any[];
    total: number;
    lastPage: number;
    links: [
        {
            active: boolean;
            label: string;
            page?: number | null;
            url?: string | null;
        }
    ];
}
