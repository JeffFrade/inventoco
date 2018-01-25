let headers = new Headers();

headers.append('X-CSRF-TOKEN', $('meta[name="csrf-token"]').attr('content'));

let get = {
    method: "GET",
    mode: 'cors',
    cache: 'default',
    credentials: "same-origin",
    headers: headers
};

let helpers = {
    overlay: '<div class="overlay"><i class="fa fa-refresh fa-spin"></i></div>',
    response: {
        status: (response) => {
            if ( response.status >= 200 && response.status < 300 ) {
                return Promise.resolve(response)
            } else {
                return Promise.reject(new Error(response.statusText))
            }
        },
        json: (response) => {
            return response.json()
        }
    }
};