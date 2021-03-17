# Requirements

## Github secrets

|Name|Explanation|
|---|---|
|CR_PAT|The Personal Access Token to push and pull the docker image from your registry|
|SERVER_FQDN|The public IP or domain name (preferable) to access the server over SSH|
|SSH_PRIVATE_KEY|The private key to access the deployment server over SSH in pem format|
|REMOTE_USER|The username of the user on the deployment server that the _**SSH_PRIVATE_KEY**_ is associated with|
|DB_NAME|Name for the larastore database|
|DB_USERNAME|Name for user that will have access to the larastore database|
|DB_PASSWORD|Password for the above user|
|VAULT_PASSWORD|Any random string that can be used for a password|