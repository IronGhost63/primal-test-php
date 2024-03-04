
-----------------------------------------------------------------------
-- products
-----------------------------------------------------------------------

DROP TABLE IF EXISTS [products];

CREATE TABLE [products]
(
    [id] INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
    [title] VARCHAR(255) NOT NULL,
    [description] MEDIUMTEXT NOT NULL,
    [price] DECIMAL(24) NOT NULL,
    UNIQUE ([id])
);
