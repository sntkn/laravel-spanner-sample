# Cloud Spanner Laravel Sample

## Usage

```bash
docker-compose up -d
```

## API

```bash
# index
curl http://localhost:8000/api/singers -H 'Content-Type: application/json' 

# craete
curl -X POST -H 'Content-Type: application/json' -d '{"SingerId":12345,"FirstName":"First Name","LastName":"Last Name"}' http://localhost:8000/api/singers

# get
curl http://localhost:8000/api/singers/12345 -H 'Content-Type: application/json'

# edit
curl -X PUT -H 'Content-Type: application/json' -d '{"FirstName":"First Name 1","LastName":"Last Name 1"}' http://localhost:8000/api/singers/12345

# delete
curl -X DELETE -H 'Content-Type: application/json' http://localhost:8000/api/singers/12345
```

## Spanner Client

```bash
docker-compose exec spanner-cli spanner-cli -p test-project -i test-instance
```
