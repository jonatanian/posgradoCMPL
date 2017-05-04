USE [SEPIDI]
GO

/****** Object:  Table [dbo].[Users]    Script Date: 02/05/2017 09:47:22 a. m. ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

SET ANSI_PADDING ON
GO

CREATE TABLE [dbo].[Users](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[name] [varchar](50) NULL,
	[email] [varchar](50) NULL,
	[password] [varchar](255) NULL,
	[is_active] [tinyint] NULL,
	[is_set] [tinyint] NULL,
	[rol_id] [int] NULL,
	[updated_at] [datetime] NULL,
	[created_at] [datetime] NuLL,
	[remember_token] [varchar](100) NULL
) ON [PRIMARY]

GO

SET ANSI_PADDING OFF
GO


