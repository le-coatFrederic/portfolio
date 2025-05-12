package online.fredinfo.portfolio.dto;

import java.time.LocalDate;
import java.util.Set;

import online.fredinfo.portfolio.models.ProjectStatus;

public record ProjectFormDTO(
    String name,
    String description,
    String url,
    String github,
    ProjectStatus status,
    LocalDate startDate,
    LocalDate endDate,
    Set<Long> techIds,
    Set<Long> skillIds
) {} 