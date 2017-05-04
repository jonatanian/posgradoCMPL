USE [SEPIDI]
GO

/****** Object:  Table [dbo].[Investigador]    Script Date: 02/05/2017 08:51:32 a. m. ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

SET ANSI_PADDING ON
GO

CREATE TABLE [dbo].[Investigador](
	[id] [int] NOT NULL IDENTITY(1,1) PRIMARY KEY,
	[nombre] [varchar](50) NULL,
	[ap_paterno] [varchar](50) NULL,
	[ap_materno] [varchar](50) NULL,
	[grado_id] [int] NULL,
	[user_id] [int] NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL,
	[modified_by] [int] NULL
) ON [PRIMARY]

GO

SET ANSI_PADDING OFF
GO


