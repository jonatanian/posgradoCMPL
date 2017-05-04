USE [SEPIDI]
GO

/****** Object:  Table [dbo].[Rol]    Script Date: 02/05/2017 01:35:23 p. m. ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

SET ANSI_PADDING ON
GO

CREATE TABLE [dbo].[Rol](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[nombre] [varchar](50) NULL,
	[descripcion] [varchar](150) NULL,
	[created_at] [datetime] NULL,
	[modified_at] [datetime] NULL,
	[modified_by] [int] NULL
) ON [PRIMARY]

GO

SET ANSI_PADDING OFF
GO


