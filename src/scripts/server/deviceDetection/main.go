package main

import (
	"encoding/json"
	"net/http"
)

func main() {
	http.HandleFunc("/detect-device", func(w http.ResponseWriter, r *http.Request) {
		if r.Method != http.MethodPost {
			http.Error(w, "Method not allowed", http.StatusMethodNotAllowed)
			return
		}

		// Decode JSON request body
		var data struct {
			IsMobile bool `json:"isMobile"`
		}
		if err := json.NewDecoder(r.Body).Decode(&data); err != nil {
			http.Error(w, err.Error(), http.StatusBadRequest)
			return
		}

		// Use the device information as needed
		if data.IsMobile {

		} else {

		}

		// Respond to the client
		w.WriteHeader(http.StatusOK)
	})

	// Serve the HTML file from the root directory
	http.HandleFunc("/", func(w http.ResponseWriter, r *http.Request) {
		http.ServeFile(w, r, "../../../index.html")
	})

	http.ListenAndServe(":8080", nil)
}
