<?php

if (! defined('SSH2_FINGERPRINT_MD5')) {
    define('SSH2_FINGERPRINT_MD5', 0);
}

if (! defined('SSH2_FINGERPRINT_SHA1')) {
    define('SSH2_FINGERPRINT_SHA1', 0);
}

if (! defined('SSH2_FINGERPRINT_HEX')) {
    define('SSH2_FINGERPRINT_HEX', 0);
}

if (! defined('SSH2_FINGERPRINT_RAW')) {
    define('SSH2_FINGERPRINT_RAW', 0);
}

if (! defined('SSH2_TERM_UNIT_CHARS')) {
    define('SSH2_TERM_UNIT_CHARS', 0);
}

if (! defined('SSH2_TERM_UNIT_PIXELS')) {
    define('SSH2_TERM_UNIT_PIXELS', 0);
}

if (! defined('SSH2_DEFAULT_TERM_WIDTH')) {
    define('SSH2_DEFAULT_TERM_WIDTH', 0);
}

if (! defined('SSH2_DEFAULT_TERM_HEIGHT')) {
    define('SSH2_DEFAULT_TERM_HEIGHT', 0);
}

if (! defined('SSH2_DEFAULT_TERM_UNIT')) {
    define('SSH2_DEFAULT_TERM_UNIT', 0);
}

if (! defined('SSH2_STREAM_STDIO')) {
    define('SSH2_STREAM_STDIO', 0);
}

if (! defined('SSH2_STREAM_STDERR')) {
    define('SSH2_STREAM_STDERR', 0);
}

if (! defined('SSH2_DEFAULT_TERMINAL')) {
    define('SSH2_DEFAULT_TERMINAL', '');
}

if (! defined('SSH2_POLLIN')) {
    define('SSH2_POLLIN', 0);
}

if (! defined('SSH2_POLLEXT')) {
    define('SSH2_POLLEXT', 0);
}

if (! defined('SSH2_POLLOUT')) {
    define('SSH2_POLLOUT', 0);
}

if (! defined('SSH2_POLLERR')) {
    define('SSH2_POLLERR', 0);
}

if (! defined('SSH2_POLLHUP')) {
    define('SSH2_POLLHUP', 0);
}

if (! defined('SSH2_POLLNVAL')) {
    define('SSH2_POLLNVAL', 0);
}

if (! defined('SSH2_POLL_SESSION_CLOSED')) {
    define('SSH2_POLL_SESSION_CLOSED', 0);
}

if (! defined('SSH2_POLL_CHANNEL_CLOSED')) {
    define('SSH2_POLL_CHANNEL_CLOSED', 0);
}

if (! defined('SSH2_POLL_LISTENER_CLOSED')) {
    define('SSH2_POLL_LISTENER_CLOSED', 0);
}

if (! function_exists('ssh2_auth_agent')) {
    /**
     * Authenticate over SSH using the ssh agent.
     *
     * @param resource $session
     * @param string   $username
     *
     * @return bool
     */
    function ssh2_auth_agent($session, string $username)
    {
    }
}

if (! function_exists('ssh2_auth_hostbased_file')) {
    /**
     * Authenticate using a public hostkey.
     *
     * @param resource $session
     * @param string   $username
     * @param string   $hostname
     * @param string   $pubkeyfile
     * @param string   $privkeyfile
     * @param string   $passphrase
     * @param string   $local_username
     *
     * @return bool
     */
    function ssh2_auth_hostbased_file($session, string $username, string $hostname, string $pubkeyfile, string $privkeyfile, string $passphrase = '', string $local_username = '')
    {
    }
}

if (! function_exists('ssh2_auth_none')) {
    /**
     * Authenticate as "none".
     *
     * @param resource $session
     * @param string   $username
     *
     * @return mixed
     */
    function ssh2_auth_none($session, string $username)
    {
    }
}

if (! function_exists('ssh2_auth_password')) {
    /**
     * Authenticate over SSH using a plain password.
     *
     * @param resource $session
     * @param string   $username
     * @param string   $password
     *
     * @return bool
     */
    function ssh2_auth_password($session, string $username, string $password)
    {
    }
}

if (! function_exists('ssh2_auth_pubkey_file')) {

    /**
     * Authenticate using a public key.
     *
     * @param resource $session
     * @param string   $username
     * @param string   $pubkeyfile
     * @param string   $privkeyfile
     * @param string   $passphrase
     *
     * @return bool
     */
    function ssh2_auth_pubkey_file($session, string $username, string $pubkeyfile, string $privkeyfile, string $passphrase = '')
    {
    }
}

if (! function_exists('ssh2_connect')) {
    /**
     * Connect to an SSH server.
     *
     * @param string $host
     * @param int    $port
     * @param array  $methods
     * @param array  $callbacks
     *
     * @return resource
     */
    function ssh2_connect(string $host, int $port = 22, array $methods = [], array $callbacks = [])
    {
    }
}

if (! function_exists('ssh2_disconnect')) {
    /**
     * Close a connection to a remote SSH server.
     *
     * @param resource $session
     *
     * @return bool
     */
    function ssh2_disconnect($session)
    {
    }
}

if (! function_exists('ssh2_exec')) {
    /**
     * Execute a command on a remote server.
     *
     * @param resource $session
     * @param string   $command
     * @param string   $pty
     * @param array    $env
     * @param int      $width
     * @param int      $height
     * @param int      $width_height_type
     *
     * @return resource|false
     */
    function ssh2_exec($session, string $command, string $pty = '', array $env = [], int $width = 80, int $height = 25, int $width_height_type = SSH2_TERM_UNIT_CHARS)
    {
    }
}

if (! function_exists('ssh2_fetch_stream')) {
    /**
     * Fetch an extended data stream.
     *
     * @param resource $channel
     * @param int      $streamid
     *
     * @return resource
     */
    function ssh2_fetch_stream($channel, int $streamid)
    {
    }
}

if (! function_exists('ssh2_fingerprint')) {
    /**
     * Retrieve fingerprint of remote server.
     *
     * @param resource $session
     * @param int      $flags
     *
     * @return string
     */
    function ssh2_fingerprint($session, int $flags = SSH2_FINGERPRINT_MD5 | SSH2_FINGERPRINT_HEX)
    {
    }
}

if (! function_exists('ssh2_forward_accept')) {
    /**
     * Accept a connection created by a listener.
     *
     * @param resource $listener
     *
     * @return resource|false
     */
    function ssh2_forward_accept($listener)
    {
    }
}

if (! function_exists('ssh2_forward_listen')) {
    /**
     * Bind a port on the remote server and listen for connections.
     *
     * @param resource $session
     * @param int      $port
     * @param string   $host
     * @param int      $max_connections
     *
     * @return resource|false
     */
    function ssh2_forward_listen($session, int $port, string $host = '', int $max_connections = 16)
    {
    }
}

if (! function_exists('ssh2_methods_negotiated')) {
    /**
     * Return list of negotiated methods.
     *
     * @param resource $session
     *
     * @return array
     */
    function ssh2_methods_negotiated($session)
    {
    }
}

if (! function_exists('ssh2_poll')) {
    /**
     * Poll the channels/listeners/streams for events.
     *
     * @param array $desc
     * @param int   $timeout
     *
     * @return int
     */
    function ssh2_poll(array &$desc, int $timeout = 30)
    {
    }
}

if (! function_exists('ssh2_publickey_add')) {
    /**
     * Add an authorized publickey.
     *
     * @param resource $pkey
     * @param string   $algoname
     * @param string   $blob
     * @param bool     $overwrite
     * @param array    $attributes
     *
     * @return bool
     */
    function ssh2_publickey_add($pkey, string $algoname, string $blob, bool $overwrite = false, array $attributes = [])
    {
    }
}

if (! function_exists('ssh2_publickey_init')) {
    /**
     * Initialize Publickey subsystem.
     *
     * @param resource $session
     *
     * @return resource|false
     */
    function ssh2_publickey_init($session)
    {
    }
}

if (! function_exists('ssh2_publickey_list')) {
    /**
     * List currently authorized publickeys.
     *
     * @param resource $pkey
     *
     * @return array
     */
    function ssh2_publickey_list($pkey)
    {
    }
}

if (! function_exists('ssh2_publickey_remove')) {
    /**
     * Remove an authorized publickey.
     *
     * @param resource $pkey
     * @param string   $algoname
     * @param string   $blob
     *
     * @return bool
     */
    function ssh2_publickey_remove($pkey, string $algoname, string $blob)
    {
    }
}

if (! function_exists('ssh2_scp_recv')) {
    /**
     * Request a file via SCP.
     *
     * @param resource $session
     * @param string   $remote_file
     * @param string   $local_file
     *
     * @return bool
     */
    function ssh2_scp_recv($session, string $remote_file, string $local_file)
    {
    }
}

if (! function_exists('ssh2_scp_send')) {
    /**
     * Send a file via SCP.
     *
     * @param resource $session
     * @param string   $local_file
     * @param string   $remote_file
     * @param int      $create_mode
     *
     * @return bool
     */
    function ssh2_scp_send($session, string $local_file, string $remote_file, int $create_mode = 0644)
    {
    }
}

if (! function_exists('ssh2_send_eof')) {
    /**
     * Send EOF to stream.
     *
     * @param resource $channel
     *
     * @return bool
     */
    function ssh2_send_eof($channel)
    {
    }
}

if (! function_exists('ssh2_sftp_chmod')) {
    /**
     * Changes file mode.
     *
     * @param resource $sftp
     * @param string   $filename
     * @param int      $mode
     *
     * @return bool
     */
    function ssh2_sftp_chmod($sftp, string $filename, int $mode)
    {
    }
}

if (! function_exists('ssh2_sftp_lstat')) {
    /**
     * Stat a symbolic link.
     *
     * @param resource $sftp
     * @param string   $path
     *
     * @return array
     */
    function ssh2_sftp_lstat($sftp, string $path)
    {
    }
}

if (! function_exists('ssh2_sftp_mkdir')) {
    /**
     * Create a directory.
     *
     * @param resource $sftp
     * @param string   $dirname
     * @param int      $mode
     * @param bool     $recursive
     *
     * @return bool
     */
    function ssh2_sftp_mkdir($sftp, string $dirname, int $mode = 0777, bool $recursive = false)
    {
    }
}

if (! function_exists('ssh2_sftp_readlink')) {
    /**
     * Return the target of a symbolic link.
     *
     * @param resource $sftp
     * @param string   $link
     *
     * @return string
     */
    function ssh2_sftp_readlink($sftp, string $link)
    {
    }
}

if (! function_exists('ssh2_sftp_realpath')) {
    /**
     * Resolve the realpath of a provided path string.
     *
     * @param resource $sftp
     * @param string   $filename
     *
     * @return string
     */
    function ssh2_sftp_realpath($sftp, string $filename)
    {
    }
}

if (! function_exists('ssh2_sftp_rename')) {
    /**
     * Rename a remote file.
     *
     * @param resource $sftp
     * @param string   $from
     * @param string   $to
     *
     * @return bool
     */
    function ssh2_sftp_rename($sftp, string $from, string $to)
    {
    }
}

if (! function_exists('ssh2_sftp_rmdir')) {
    /**
     * Remove a directory.
     *
     * @param resource $sftp
     * @param string   $dirname
     *
     * @return bool
     */
    function ssh2_sftp_rmdir($sftp, string $dirname)
    {
    }
}

if (! function_exists('ssh2_sftp_stat')) {
    /**
     * Stat a file on a remote filesystem.
     *
     * @param resource $sftp
     * @param string   $path
     *
     * @return array
     */
    function ssh2_sftp_stat($sftp, string $path)
    {
    }
}

if (! function_exists('ssh2_sftp_symlink')) {
    /**
     * Create a symlink.
     *
     * @param resource $sftp
     * @param string   $target
     * @param string   $link
     *
     * @return bool
     */
    function ssh2_sftp_symlink($sftp, string $target, string $link)
    {
    }
}

if (! function_exists('ssh2_sftp_unlink')) {
    /**
     * Delete a file.
     *
     * @param resource $sftp
     * @param string   $filename
     *
     * @return bool
     */
    function ssh2_sftp_unlink($sftp, string $filename)
    {
    }
}

if (! function_exists('ssh2_sftp')) {
    /**
     * Initialize SFTP subsystem.
     *
     * @param resource $session
     *
     * @return resource|false
     */
    function ssh2_sftp($session)
    {
    }
}

if (! function_exists('ssh2_shell')) {
    /**
     * Request an interactive shell.
     *
     * @param resource   $session
     * @param string     $term_type
     * @param array|null $env
     * @param int        $width
     * @param int        $height
     * @param int        $width_height_type
     *
     * @return resource|false
     */
    function ssh2_shell($session, string $term_type = 'vanilla', ?array $env = null, int $width = 80, int $height = 25, int $width_height_type = SSH2_TERM_UNIT_CHARS)
    {
    }
}

if (! function_exists('ssh2_tunnel')) {
    /**
     *  Open a tunnel through a remote server.
     *
     * @param resource $session
     * @param string   $host
     * @param int      $port
     *
     * @return resource
     */
    function ssh2_tunnel($session, string $host, int $port)
    {
    }
}
