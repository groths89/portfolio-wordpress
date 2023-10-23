Error Found:

```
╭─ 13:20:33 |  23 Oct, Monday |   in  mnt      wp-gregory-portfolio  app  trellis
╰─❯ trellis vault encrypt staging
Running command => ansible-vault encrypt group_vars/all/vault.yml group_vars/staging/vault.yml
[WARNING]: Error in vault password file loading (default): Problem running
vault password script /mnt/f/Development/05_Projects/wp-gregory-
portfolio/app/trellis/.vault_pass ([Errno 8] Exec format error:
'/mnt/f/Development/05_Projects/wp-gregory-portfolio/app/trellis/.vault_pass').
If this is not a script, remove the executable bit from the file.
ERROR! Problem running vault password script /mnt/f/Development/05_Projects/wp-gregory-portfolio/app/trellis/.vault_pass ([Errno 8] Exec format error: '/mnt/f/Development/05_Projects/wp-gregory-portfolio/app/trellis/.vault_pass'). If this is not a script, remove the executable bit from the file.
```

Solution Found:

`chmod a-x ~/.vaultpw`

- Change the name of the file to the file name where the vault passwords is configured
  - Ex. `.vaultpw` to `.vault_pass`
